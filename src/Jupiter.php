<?php

namespace Synon\Jupiter;

use Synon\Jupiter\Lang\En;
use Synon\Jupiter\Contracts\JupiterInterface;

class Jupiter implements JupiterInterface
{
	protected $lang;

	/**
	 * @param string $lang ex: 'fa', 'en'
	 * @author Farzin Bidokhti
	 */
	public function __construct($lang)
	{
		$class = 'Synon\\Jupiter\\Lang\\' . $lang;
		$this->lang = new $class;
	}

	/**
	 * @param string $key ex: 'firstName', 'lastName', etc.
	 * @return string choose one of $key's item
	 * @author Farzin Bidokhti
	 */
	public function generateIndex(String $key)
	{
		return $this->lang->$key[rand(0, sizeof($this->lang->$key) - 1)];
	}

	/**
	 * @return string first name male
	 * @author Farzin Bidokhti
	 */
	public function firstNameMale()
	{
		return $this->generateIndex('firstNameMale');
	}

	/**
	 * @return string last name female
	 * @author Farzin Bidokhti
	 */
	public function firstNameFemale()
	{
		return $this->generateIndex('firstNameFemale');
	}

	/**
	 * @return string first name (male / female)
	 * @author Farzin Bidokhti
	 */
	public function firstNameMix()
	{
		return $this->generateIndex('firstNameMix');
	}

	/**
	 * @return string last name
	 * @author Farzin Bidokhti
	 */
	public function lastName()
	{
		return $this->generateIndex('lastName');
	}

	/**
	 * @return string full name male
	 * @author Farzin Bidokhti
	 */
	public function fullNameMale()
	{
		$this->firstNameMale() . ' ' . $this->lastName();
	}

	/**
	 * @return string full name female
	 * @author Farzin Bidokhti
	 */
	public function fullNameFemale()
	{
		$this->firstNameFemale() . ' ' . $this->lastName();
	}

	/**
	 * @return string full name (male / female)
	 * @author Farzin Bidokhti
	 */
	public function fullNameMix()
	{
		$this->firstNameMix() . ' ' . $this->lastName();
	}

	/**
	 * @return string company
	 * @author Farzin Bidokhti
	 */
	public function company()
	{
		return $this->generateIndex('company');
	}

	/**
	 * @return string domain
	 * @author Farzin Bidokhti
	 */
	public function domain()
	{
		if (get_class($this->lang) == 'Synon\Faker\Lang\En') {
			return $this->generateIndex('domain');
		}
	}

	/**
	 * @param string $emailSercive ex: sample something@sample.com
	 * @param string $domain ex: me something@something.me
	 * @return string email
	 * @author Farzin Bidokhti
	 */
	public function email($emailSercive = null, $domain = null)
	{
		$en = new En();
		return ($emailSercive == null && $domain == null) ?
			$en->firstNameMix[rand(0, sizeof($this->lang->firstNameMix) - 1)] . '_' .
			$en->lastName[rand(0, sizeof($this->lang->lastName) - 1)] . '@' .
			$en->emailService[rand(0, sizeof($this->lang->emailService) - 1)] . '.' .
			$en->domain[rand(0, sizeof($this->lang->domain) - 1)] :
			$en->firstNameMix[rand(0, sizeof($this->lang->firstNameMix) - 1)] . '_' .
			$en->lastName[rand(0, sizeof($this->lang->lastName) - 1)] . '@' .
			$emailSercive . '.' .
			$domain;
	}
}
