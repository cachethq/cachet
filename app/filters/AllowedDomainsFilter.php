<?php

class AllowedDomainsFilter {
    public function filter($route, $request, $response) {
    	// Always allow our own domain.
    	$ourDomain = Setting::get('app_domain');
        $response->headers->set('Access-Control-Allow-Origin', $ourDomain);

        // Should we allow anyone else?
    	if ($setting = Setting::get('allowed_domains')) {
    		$domains = explode(',', $setting);
    		foreach ($domains as $domain) {
		        $response->headers->set('Access-Control-Allow-Origin', $domain);
    		}
    	}

        return $response;
    }
}
