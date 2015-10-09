<?php

class Home extends Controller {

    public function Index() {
        $usecase = new GetItemsUseCase(new ItemGateway($this->db));
        $items = $usecase->Invoke();
        
        require APP . 'views/_templates/header.php';
        require APP . 'views/home/index.php';
        require APP . 'views/_templates/footer.php';
    }

}
