<?php
/**
 * @copyright Copyright (c) 2024 Álvaro Dubla Gaita
 * @author Álvaro Dubla Gaita
 * @version V1.0
 */

class Aritmetica {
    /**
     * @var mixed Último resultado de una operación aritmética
     */
    private $ultimoResultado;
    
    /**
     * Suma los elementos de una operación.
     *
     * @param array $sumandos Números de sumandos
     * @return mixed Resultado de la suma
     */
    public function suma($sumandos) {
        $total = 0;
        foreach ($sumandos as $valor) {
            $total = $total + $valor;
        }
        return $this->ultimoResultado = $total;
    }
    
    /**
     * Resta dos números.
     *
     * @param float $minuendo El número del cual se restará.
     * @param float $sustraendo El número a restar.
     * @return float Resultado de la resta
     */
    public function resta(float $minuendo, float $sustraendo) {
        return $this->ultimoResultado = $minuendo - $sustraendo;
    }
    
    /**
     * Multiplica los elementos de un arreglo.
     *
     * @param array $operandos Números de operandos
     * @return mixed Resultado de la multiplicación
     */
    public function multiplicacion($operandos) {
        $total = 0;
        foreach ($operandos as $valor) {
            $total = $total * $valor;
        }
        return $this->ultimoResultado = $total;
    }
    
    /**
     * Divide dos números.
     *
     * @param float $dividendo El número a dividir.
     * @param float $divisor El número por el cual se divide.
     * @return float Resultado de la división
     * @throws Exception Si el divisor es igual a 0.
     */
    public function division(float $dividendo, float $divisor) {
        if ($divisor == 0) {
            throw new Exception('División entre 0');
        } else {
            return $this->ultimoResultado = $dividendo / $divisor;
        }
    }
    
    /**
     * Obtiene el último resultado de una operación aritmética.
     *
     * @return mixed Último resultado de una operación aritmética
     */
    public function getUltimaResultado() {
        return $this->ultimoResultado;
    }
    
    /**
     * Devuelve una representación de cadena del último resultado.
     *
     * @return string Representación de cadena del último resultado
     */
    public function __toString() {
        return strval($this->ultimoResultado);
    }
}
?>
