<?php
    namespace sysborg\autentiquev2;

    class deleteDoc extends common implements \sysborg\autentiquev2\layouts{
        /**
         * @description-en-US:       Stores informations and variables for this layout
         * @description-pt-BR:       Armazena informações e variáveis para esse layout
         * @var                      array
         */
        protected array $layoutInfo = [
            'document_id' => ''
        ];

        /**
         * @description-en-US:       Stores the query of graphql
         * @description-pt-BR:       Armazena a query do graphql
         * @var                      string
         */
        private string $query = '{
            "query": "mutation { deleteDocument(id: \"%s\") }",
            "variables": {}
        }';

        /**
         * @description-en-US       Parse the values on the graphql schema and returns as string
         * @description-pt-BR       Parse os valores no schema do graphql e retorna como string
         * @author                  Anderson Arruda < andmarruda@gmail.com >
         * @version                 1.0.0
         * @access                  public
         * @param                   
         * @return                  string
         */
        public function parse() : string
        {
            return sprintf($this->query, $this->document_id);
        }
    }
?>
