# Sticky Incidents Fix

## Problem
Sticky incidents were not being displayed prominently at the top of the status page. They appeared only in the regular incident timeline based on their date.

## Root Cause
The `IncidentTimeline` component in the `cachethq/core` package did not separate sticky incidents from regular incidents when fetching and displaying them.

## Solution
The fix involves modifying three files in the `cachethq/core` repository:

### 1. `src/View/Components/IncidentTimeline.php`
- Added a new `stickiedIncidents()` method that fetches only stickied incidents
- Modified the `incidents()` method to exclude stickied incidents using `->where('stickied', false)`
- Updated the `render()` method to pass `stickiedIncidents` to the view

### 2. `resources/views/components/incident-timeline.blade.php`
- Added a new section at the top to display stickied incidents separately
- Stickied incidents now appear with a distinctive amber border (ring-2 ring-amber-500)
- The section only displays when there are stickied incidents
- Each stickied incident shows all its details (status, updates, timeline)

### 3. `resources/lang/en/incident.php`
- Added translation key `timeline.stickied_incidents_header` = "Stickied Incidents"

### 4. `tests/Feature/View/Components/IncidentTimelineTest.php` (New file)
- Added comprehensive tests for sticky incident functionality
- Tests verify sticky incidents are displayed separately
- Tests verify sticky incidents don't appear in regular timeline
- Tests verify proper sorting and display behavior

## Visual Changes
- **Stickied Incidents Section**: New section appears at the top with heading "Stickied Incidents"
- **Visual Distinction**: Stickied incidents have an amber ring border to make them stand out
- **Background**: Slight amber tint on the header background for stickied incidents
- **Separation**: Clear visual separation between stickied and regular incidents

## Implementation Details
The key changes ensure that:
1. Stickied incidents are always visible at the top of the page, regardless of their date
2. Stickied incidents are excluded from the date-based timeline
3. Multiple stickied incidents are sorted by timestamp (newest first)
4. The stickied section only appears when there are stickied incidents
5. All incident features (updates, status, components) work the same for stickied incidents

## Applying the Fix

Since the actual code changes are in the `cachethq/core` repository, the fix needs to be applied there. The patch file `sticky-incidents-fix.patch` contains all the changes that need to be merged into the core repository.

To apply locally for testing:
```bash
cd vendor/cachethq/core
patch -p1 < ../../../sticky-incidents-fix.patch
```

## Testing
Run the test suite to verify the changes:
```bash
cd vendor/cachethq/core
php vendor/bin/pest tests/Feature/View/Components/IncidentTimelineTest.php
```

## Screenshots
Before: Sticky incidents appear only in the regular timeline under their date
After: Sticky incidents appear in a dedicated section at the top with visual distinction
