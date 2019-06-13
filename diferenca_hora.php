<?php


    /** 
     * Retornar diferença entre datas (em dias)
     * 
     * @param data $data_inicial     
     * @param date $data_final
     * 
     */
    function diasDiferenca($data_inicial, $data_final ){
        $data_inicial =  $this->tratarData($data_inicial,'us');
        $data_final =  $this->tratarData($data_final,'us');

        $data_inicio = new DateTime($data_inicial.' 00:00:00');
        $data_final = new DateTime($data_final.' 23:23:23' );
    
        // Resgata diferença entre as datas
        $dateInterval = $data_inicio->diff($data_final);

        return $dateInterval->days ;

	}