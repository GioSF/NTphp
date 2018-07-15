  
    <?php
    
    /* Model é onde fica a parte lógica da aplicação, ou seja, todos os recursos da sua aplicação 
     * (consultas ao banco de dados, validações, lógica de disparo de email...), 
     * 
     * View é onde fica todo o necessário para exibir dados, e isso pode ser muito amplo, 
     * imagine um componente para renderizar formulários ou tags HTML, ou mesmo um menu multinível, 
     * toda essa lógica fica na view, assim como a Model, a View não sabe quando deve ser executada, 
     * ela apenas sabe como fazer, não quando.
     * 
     * Controller é onde tudo acontece realmente, ele é o cara que não sabe como fazer, mas sabe quando. 
     * Muitos dizem que o controller não deve ter regras de negócio e automaticamente já entendem 
     * que não se deve ter estruturas de controle (if, else...), na verdade é obrigação do controller 
     * dizer o que deve acontecer e quando, então imagine que você tem uma página com formulário, 
     * como você faria para identificar se a requisição foi pelo formulário o não? Então, o 
     * controller deve saber quando fazer as coisas e você deve implementar o necessário para que 
     * isso se torne realidade.
     */

    require_once './_misc/UniversalConnect.php';
    require_once './_misc/request.php';
    require_once './_misc/Visao.php';
    require_once './_misc/Controle.php';
    

    // Esses quatro pontinhos significa que você está chamando um método 
    // estático de uma classe. Um método estático pode ser chamado sem a necessidade 
    // de instanciar um objeto da classe.
            
    $controller = Request::get('controller');
    $action = Request::get('action');
    
    if ($controller == '') {
            $controller = "home";
    }

    //http://php.net/manual/pt_BR/function.file-exists.php
    if (file_exists("./controller/{$controller}Controller.php")) {
        require_once "./controller/{$controller}Controller.php";
    }
    else {
        die("O controle <strong>{$controller}</strong> não existe na pasta controller do MVC");
    }

    $controller .= 'Controller';
    $controller = new $controller();

    if ($action == "") {
            $action = 'index';
    }

    // http://php.net/manual/pt_BR/function.method-exists.php
    // Verifica se o método da classe existe num dado object. 
    if (method_exists($controller, $action)) {             
        $controller->$action();
    }
    else {
        die('Metodo nao existe.');
        // Ou direcionar sempre para a página inicial...
    }
    ?>