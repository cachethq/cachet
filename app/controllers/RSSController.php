<?php

	class RSSController extends Controller {
		public function feedAction() {
			$feed = RSS::feed('2.0', 'UTF-8');
			$feed->channel([
				'title' => Setting::get('app_name'),
				'description' => 'Status Feed',
				'link' => Setting::get('app_domain'),
			]);

			Incident::get()->map(function($incident) use ($feed) {
				$feed->item([
					'title' => $incident->name,
					'message' => $incident->message,
					'component' => $incident->parent->name,
					'status' => $incident->humanStatus,
					'created_at' => $incident->created_at,
					'updated_at' => $incident->updated_at
				]);
			});

			return Response::make($feed, 200, [
				'Content-Type' => 'text/xml'
			]);
		}
	}
