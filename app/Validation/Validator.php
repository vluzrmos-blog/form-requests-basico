<?php namespace App\Validation;

use KennedyTedesco\Validation\Validator as TedescoValidator;

class Validator extends TedescoValidator{

	const TIPO_PESSOA_FISICA = 1;

	public function validatePessoaCpf($attribute, $value, $parameters){
		$data = $this->getData();

		if($this->isPessoaFisica($data)){
			return $this->validateCpf($attribute, $value, $parameters);
		}

		return true;
	}

	public function isPessoaFisica($data = []){
		return array_get($data, 'tipo', null) == self::TIPO_PESSOA_FISICA;
	}
}
