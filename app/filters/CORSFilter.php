<?php

class CORSFilter {
    public function filter($route, $request, $response) {
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }
}
