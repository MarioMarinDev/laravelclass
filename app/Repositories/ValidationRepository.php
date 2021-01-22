<?php

namespace App\Repositories;

use App\Models\Validation;

class ValidationRepository {

    /**
     * Store or Edit a Validation object
     *
     * @param array $params
     * @param \App\Models\Validation $validation
     * @return \App\Models\Validation
     */
    public function save($params, Validation $validation) {
        $validation = ($validation) ? : new Validation;
    }

}
