<?php

namespace JansenFelipe\NFePHPSerialize;

class Facade extends \Illuminate\Support\Facades\Facade {

    protected static function getFacadeAccessor() {
        return 'nfephp_serialize';
    }

}
