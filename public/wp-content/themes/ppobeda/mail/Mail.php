<?php

class Mail {
	protected $type = "";
	protected $name;
	protected $phone;
	protected $title;
	protected $fields = array();
	protected $message;
	protected $headers;
	public static $recipient;
	public static $secret_key;

	public function __construct( $name, $phone, $email, $title ) {
		$this->name                 = htmlspecialchars( $name );
		$this->phone                = htmlspecialchars( $phone );
		$this->email                = htmlspecialchars( $email );
		$this->title                = htmlspecialchars( $title );
		$this->fields['Клиент']     = $this->name;
		$this->fields['Телефон']    = $this->phone;
		$this->fields['Email']			= $this->email;
		$this->fields['Продукция']  = $this->title;
	}

	public static function getCaptcha( $response ){
		$result = file_get_contents( "https://www.google.com/recaptcha/api/siteverify?secret=" . self::$secret_key ."&response=" . $response );
		return json_decode( $result );
	}

	protected function getHeaders() {
		$this->headers = "MIME-Version: 1.0\r\n";
		$this->headers .= "Content-type: text/html; charset=utf-8\r\n";
		$this->headers .= "From: PPobeda <site@ppobeda.ru>\r\n";
		$this->headers .= "Reply-To: {$this->email}\r\n";
		return $this->headers;
	}

	protected function getSubject() {
		return "Заказ с сайта Ppobeda от {$this->name}";
	}

	protected function getMessage() {
		$this->message = "<html><head><title>Заказ с сайта PPobeda</title></head><body><table>";
		foreach ( $this->fields as $key => $value ) {
			$this->message .= "<tr><td>{$key}</td><td>{$value}</td></tr>";
		}
		$this->message .= "</table></body></html>";
		return $this->message;
	}

	public function sendMail(): void {
		mail( self::$recipient, $this->getSubject(), $this->getMessage(), $this->getHeaders() );
	}
}
