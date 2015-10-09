<?php

class GetItemsUseCase {

    public function __construct($itemGateway) {
        $this->itemGateway = $itemGateway;
    }

    public function Invoke() {
        return $this->itemGateway->GetItems();
    }

}
