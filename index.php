  
    <?php
    
    /* Model � onde fica a parte l�gica da aplica��o, ou seja, todos os recursos da sua aplica��o 
     * (consultas ao banco de dados, valida��es, l�gica de disparo de email...), 
     * 
     * View � onde fica todo o necess�rio para exibir dados, e isso pode ser muito amplo, 
     * imagine um componente para renderizar formul�rios ou tags HTML, ou mesmo um menu multin�vel, 
     * toda essa l�gica fica na view, assim como a Model, a View n�o sabe quando deve ser executada, 
     * ela apenas sabe como fazer, n�o quando.
     * 
     * Controller � onde tudo acontece realmente, ele � o cara que n�o sabe como fazer, mas sabe quando. 
     * Muitos dizem que o controller n�o deve ter regras de neg�cio e automaticamente j� entendem 
     * que n�o se deve ter estruturas de controle (if, else...), na verdade � obriga��o do controller 
     * dizer o que deve acontecer e quando, ent�o imagine que voc� tem uma p�gina com formul�rio, 
     * como voc� faria para identificar se a requisi��o foi pelo formul�rio o n�o? Ent�o, o 
     * controller deve saber quando fazer as coisas e voc� deve implementar o necess�rio para que 
     * isso se torne realidade.
     */

    require_once './_misc/UniversalConnect.php';
    require_once './_misc/request.php';
    require_once './_misc/Visao.php';
    require_once './_misc/Controle.php';
    

    // Esses quatro pontinhos significa que voc� est� chamando um m�todo 
    // est�tico de uma classe. Um m�todo est�tico pode ser chamado sem a necessidade 
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
        die("O controle <strong>{$controller}</strong> n�o existe na pasta controller do MVC");
    }

    $controller .= 'Controller';
    $controller = new $controller();

    if ($action == "") {
            $action = 'index';
    }

    // http://php.net/manual/pt_BR/function.method-exists.php
    // Verifica se o m�todo da classe existe num dado object. 
    if (method_exists($controller, $action)) {             
        $controller->$action();
    }
    else {
        die('Metodo nao existe.');
        // Ou direcionar sempre para a p�gina inicial...
    }
    ?>