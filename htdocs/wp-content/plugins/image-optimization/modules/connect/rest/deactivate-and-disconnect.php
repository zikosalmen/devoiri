<?php

namespace ImageOptimization\Modules\Connect\Rest;

use ImageOptimization\Modules\Connect\Classes\{
	Data,
	Route_Base,
	Service
};
use Throwable;
use WP_REST_Request;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Class Disconnect
 */
class Deactivate_And_Disconnect extends Route_Base {
	public string $path = 'deactivate_and_disconnect';
	public const NONCE_NAME = 'wp_rest';

	public function get_methods(): array {
		return [ 'POST' ];
	}

	public function get_name(): string {
		return 'deactivate_and_disconnect';
	}

	public function POST( WP_REST_Request $request ) {
		$valid = $this->verify_nonce_and_capability(
			$request->get_param( self::NONCE_NAME ),
			self::NONCE_NAME
		);

		if ( is_wp_error( $valid ) ) {
			return $this->respond_error_json( [
				'message' => $valid->get_error_message(),
				'code' => 'forbidden',
			] );
		}

		try {
			if ( $request->get_param( 'clear_session' ) ) {
				Data::clear_session();
				return $this->respond_success_json();
			}

			Service::deactivate_license();
			Service::disconnect();

			return $this->respond_success_json();
		} catch ( Throwable $t ) {
			Data::ensure_reset_connect();
			return $this->respond_error_json( [
				'message' => $t->getMessage(),
				'code' => 'internal_server_error',
			] );
		}
	}
}
