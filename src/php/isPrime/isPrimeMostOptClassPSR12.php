<?php
/**
 * This is no reason thing but now we build a psr12 version
 * PHP Version 7.4
 *
 * @category Speed_Test_Example
 * @package  Php_Package_Prime_Performance
 * @author   Sold <defenetly@wantoputmyemail.here>
 * @license  GPL-3 https://www.gnu.org/licenses/gpl-3.0.en.html
 * @link     https://findit.zh/Soldy
 */



 /**
  * Prime
  *
  * @category Speed_Test_Example
  * @package  Php_Package_Prime_Performance
  * @author   Sold <defenetly@wantoputmyemail.here>
  * @license  GPL-3 https://www.gnu.org/licenses/gpl-3.0.en.html
  * @link     https://findit.zh/Soldy
  */
class Prime
{
    /**
     * Hey arnold
     */
    private $_real_primes = [2,3,5];

    /**
     * No point
     *
     * @param $number {integer}
     *
     * @return {bool}
     */
    private function _isPrime(int $number) : bool
    {
        for ($i = 0; $this->_real_primes[$i] < sqrt($number)+1; $i++ ) {
            if ($number % $this->_real_primes[$i] == 0) {
                 return false;
            }
        }
             return true;
    }

    /**
     * This is the constructor .. suprise yaaa ??? 
     */
    public function __construct()
    {
        for ($k = 6 ; $k < 2000000; $k++) {
            if ($this->_isPrime($k)) {
                $this->_real_primes[]=$k;
            }
        }
        echo "\n".count($this->_real_primes)."\n";
    }
}


(new Prime());
