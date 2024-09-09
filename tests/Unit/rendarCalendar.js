const { JSDOM } = require("jsdom");
const { window } = new JSDOM(`<!DOCTYPE html><body></body></html>`);
global.document = window.document;
global.window = window;

// Mock the Calendar and Swal objects
global.Calendar = jest.fn();
global.Swal = {
    fire: jest.fn().mockResolvedValue({ isConfirmed: true }),
};

global.moment = jest.fn((date) => ({
    format: jest.fn().mockReturnValue('formatted_date'),
}));

// Mock the csrf_token function
global.csrf_token = jest.fn().mockReturnValue('csrf_token_value');

// Import the renderCalendar function
const { renderCalendar } = require('./index.blade.php');
const { test } = require("media-typer");

test('renderCalendar function', () => {
    const events = [{ id: 1, extendedProps: { instability: true } }];
    renderCalendar(events);

    // Check that the Calendar was created
    expect(Calendar).toHaveBeenCalled();

    // Check that the events were passed to the Calendar
    const calendarOptions = Calendar.mock.calls[0][1];
    expect(calendarOptions.events).toEqual(events);

    // Simulate an eventDidMount call
    const eventDidMountInfo = { event: events[0], el: document.createElement('div') };
    calendarOptions.eventDidMount(eventDidMountInfo);

    // Check that the end-line was added to the event element
    expect(eventDidMountInfo.el.querySelector('.end-line')).not.toBeNull();

    // Simulate an eventMouseEnter call
    const eventMouseEnterInfo = { event: events[0] };
    calendarOptions.eventMouseEnter(eventMouseEnterInfo);

    // Check that the Swal was called
    expect(Swal.fire).toHaveBeenCalled();
});

test('formatTime function', () => {
    const dateStr = '2022-01-01T00:00:00Z';
    const result = formatTime(dateStr);

    // Check that moment was called with the correct date
    expect(moment).toHaveBeenCalledWith(new Date(dateStr));

    // Check that format was called with 'LT'
    expect(moment().format).toHaveBeenCalledWith('LT');

    // Check that the result is the formatted date
    expect(result).toBe('formatted_date');

});