<?php
  session_start();

  if(!isset($_SESSION['usuario']) AND !isset($SESSION['senha'])){
  header("location: home.html");
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="css/freelancer.css">
    <link rel = "shortcut icon" type = "img/profile.png" href ="/home/aluno/Downloads/startbootstrap-freelancer-gh-pages/img/profile.png"/imagens/icone_ie.ico"/>
    <link rel="shortcut icon" type="logo2.png" href="logo2.png">
    <title>Gestão Empresarial</title>

     <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">
  <script src="//code.jivosite.com/widget.js" jv-id="cyQnu00MZT" async></script>








    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->


    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="tabela.css" rel="stylesheet">
    <script type="text/javascript" src="calculo.js"></script>
</head>
<body id="page-top">
   

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">Página inicial</a>
        
        
              
            

            <?php 
               if (!isset($_COOKIE['usuario'])) {
                echo "";
                 # code...
               }
               else{?>
                <div>
                  <input class="btn-log-tabela" style="width: 70px; padding: 3px; cursor: pointer; box-shadow: 6px 6px 5px; #999; -webkit-box-shadow: 6px 6px 5px #000066; -moz-box-shadow: 6px 6px 5px #999; font-weight: bold; background: #18bc9c; color: #ffffff; border-radius: 6px; border: 1px solid #999; font-size: 100%;" id="s" type="button" value="Sair" onclick="window.location.href='logout.php'"/></div>
            
            <?php } ?>    
                

                <h3 class="nome-tabela"><?php
                    if (isset($_COOKIE['usuario'])) {
                        echo $_COOKIE['usuario'];
                    }else { ?> </h3>

            <div>
            <input style="width: 70px; padding: 3px; cursor: pointer; box-shadow: 6px 6px 5px; #999; -webkit-box-shadow: 6px 6px 5px #000066; -moz-box-shadow: 6px 6px 5px #999; font-weight: bold; background: #18bc9c; color: #ffffff; border-radius: 6px; border: 1px solid #999; font-size: 100%;" id="s" type="button" value="Logar" onclick="window.location.href='home.html'"/></div>
            <?php } ?>    
     
            
            
            
        </div>
    </nav>

<!------ Include the above in your HEAD tag ---------->
    <form class="login-form" method="POST" action="armazena_dados_empresa.php">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                      
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Diagnóstico GENE</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-12">
                                <table class="table table-striped custab">
                                <thead>
                                   <tr>
                                        <th>ID</th>
                                        <th>Orientação para o Mercado</th>
                                        <th></th>
                                        <th class="text-center">Resposta</th>
                                    </tr>
                                </thead>
                                    <tr>
                                        <td>1</td>
                                        <td><a href="#">Frequentemente avalio se os meus produtos e/ou serviços poderiam ser vendidos em outros mercados, que não os planejados inicialmente.</a></td>
                                        <td></td>
                                        <td class="text-center"><select class="form-control" maxlength="11" type="text" name="Campo1" id="Campo1">
                        <option value="0">Opções </option>
                        <option value="1">Discordo Totalmente</option>
                        <option value="2">Concordo Parcialmente</option>
                        <option value="3">Nem discordo/Nem concordo</option>
                        <option value="4">Concordo Parcialmente</option>
                        <option value="5">Concordo Totalmente</option>
                      </select></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><a href="#">Quando percebo que meus produtos e/ou serviços são comprados por alguém que eu não tinha imaginado antes, incentivo positivamente a sua venda, pois sei que é mais importante servir o novo cliente do que pensar apenas no meu produto e/ou serviço de forma isolada.</a></td>
                                        <td></td>
                                        <td class="text-center"><select class="form-control" maxlength="11" type="text" name="Campo2" id="Campo2">
                        <option value="0">Opções </option>
                        <option value="1">Discordo Totalmente</option>
                        <option value="2">Concordo Parcialmente</option>
                        <option value="3">Nem discordo/Nem concordo</option>
                        <option value="4">Concordo Parcialmente</option>
                        <option value="5">Concordo Totalmente</option>
                      </select></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><a href="#">Em geral passo bastante tempo conversando com os meus clientes, vendedores e fornecedores para saber se estão satisfeitos com os meus produtos e/ou serviços.</a></td>
                                        <td></td>
                                        <td class="text-center"><select class="form-control" maxlength="11" type="text" name="Campo3" id="Campo3">
                        <option value="0">Opções </option>
                        <option value="1">Discordo Totalmente</option>
                        <option value="2">Concordo Parcialmente</option>
                        <option value="3">Nem discordo/Nem concordo</option>
                        <option value="4">Concordo Parcialmente</option>
                        <option value="5">Concordo Totalmente</option>
                      </select></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><a href="#">Quando percebo que meus produtos e/ou serviços são comprados por clientes que não imaginava antes, tento entender as suas motivações para descobrir como estão usando os meus produtos e/ou serviços.</a></td>
                                        <td></td>
                                        <td class="text-center"><select class="form-control" maxlength="11" type="text" name="Campo4" id="Campo4">
                        <option value="0">Opções </option>
                        <option value="1">Discordo Totalmente</option>
                        <option value="2">Concordo Parcialmente</option>
                        <option value="3">Nem discordo/Nem concordo</option>
                        <option value="4">Concordo Parcialmente</option>
                        <option value="5">Concordo Totalmente</option>
                      </select></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td><a href="#">Acredito que o papel do meu negócio é servir os clientes atendendo as suas necessidades e não dizer o que devem fazer com os meus produtos e/ou serviços.</a></td>
                                        <td></td>
                                        <td class="text-center"><select class="form-control" maxlength="11" type="text" name="Campo5" id="Campo5">
                        <option value="0">Opções </option>
                        <option value="1">Discordo Totalmente</option>
                        <option value="2">Concordo Parcialmente</option>
                        <option value="3">Nem discordo/Nem concordo</option>
                        <option value="4">Concordo Parcialmente</option>
                        <option value="5">Concordo Totalmente</option>
                      </select></td>
                        
                                    </tr>
                                    <td></td>
                                    <td class="alert">
                                        <input type="text" name="resultado" id="resultado" readonly/>
                                        <input type="button" name="btn" value="calcular" onclick="calculo();"/>
                                    </td>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                      
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Diagnóstico GENE</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-12">
                                <table class="table table-striped custab">
                                <thead>
                                   <tr>
                                        <th>ID</th>
                                        <th>Providência Financeira</th>
                                        <th></th>
                                        <th class="text-center">Resposta</th>
                                    </tr>
                                </thead>
                                    <tr>
                                        <td>6</td>
                                        <td><a href="#">Na minha empresa tenho dinheiro em caixa ou posso conseguir rapidamente para pagar os fornecedores 60 dias antes do prazo estabelecido por eles para o pagamento.</a></td>
                                        <td></td>
                                        <td class="text-center"><select class="form-control" maxlength="11" type="text" name="Campo6" id="Campo6">
                        <option value="0">Opções </option>
                        <option value="1">Discordo Totalmente</option>
                        <option value="2">Concordo Parcialmente</option>
                        <option value="3">Nem discordo/Nem concordo</option>
                        <option value="4">Concordo Parcialmente</option>
                        <option value="5">Concordo Totalmente</option>
                      </select></td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td><a href="#">Atualmente possuo Capital de Giro (Dinheiro em caixa, Estoques, etc.) suficiente para manter o meu negócio em atividade por pelo menos 60 dias sem precisar de nenhum tipo de empréstimo.</a></td>
                                        <td></td>
                                        <td class="text-center"><select class="form-control" maxlength="11" type="text" name="Campo7" id="Campo7">
                        <option value="0">Opções </option>
                        <option value="1">Discordo Totalmente</option>
                        <option value="2">Concordo Parcialmente</option>
                        <option value="3">Nem discordo/Nem concordo</option>
                        <option value="4">Concordo Parcialmente</option>
                        <option value="5">Concordo Totalmente</option>
                      </select></td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td><a href="#">Geralmente faço um controle detalhado das Contas a Pagar, das Contas a Receber e dos meus Estoques (se for o caso).</a></td>
                                        <td></td>
                                        <td class="text-center"><select class="form-control" maxlength="11" type="text" name="Campo8" id="Campo8">
                        <option value="0">Opções </option>
                        <option value="1">Discordo Totalmente</option>
                        <option value="2">Concordo Parcialmente</option>
                        <option value="3">Nem discordo/Nem concordo</option>
                        <option value="4">Concordo Parcialmente</option>
                        <option value="5">Concordo Totalmente</option>
                      </select></td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td><a href="#">Possuo relativa facilidade para obter empréstimos de instituições financeiras para aplicar no meu negócio.</a></td>
                                        <td></td>
                                        <td class="text-center"><select class="form-control" maxlength="11" type="text" name="Campo9" id="Campo9">
                        <option value="0">Opções </option>
                        <option value="1">Discordo Totalmente</option>
                        <option value="2">Concordo Parcialmente</option>
                        <option value="3">Nem discordo/Nem concordo</option>
                        <option value="4">Concordo Parcialmente</option>
                        <option value="5">Concordo Totalmente</option>
                      </select></td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td><a href="#">Tenho conhecimento das áreas críticas do meu negócio (Capital de Giro; Contas a Pagar; Contas a Receber; Custo das Matérias-Primas; Despesas Administrativas e de Pessoal) e realizo um planejamento para evitar futuros problemas nessas áreas.</a></td>
                                        <td></td>
                                        <td class="text-center"><select class="form-control" maxlength="11" type="text" name="Campo10" id="Campo10">
                        <option value="0">Opções </option>
                        <option value="1">Discordo Totalmente</option>
                        <option value="2">Concordo Parcialmente</option>
                        <option value="3">Nem discordo/Nem concordo</option>
                        <option value="4">Concordo Parcialmente</option>
                        <option value="5">Concordo Totalmente</option>
                      </select></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                      
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Diagnóstico GENE</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-12">
                                <table class="table table-striped custab">
                                <thead>
                                   <tr>
                                        <th>ID</th>
                                        <th>Equipe de Gestão</th>
                                        <th></th>
                                        <th class="text-center">Resposta</th>
                                    </tr>
                                </thead>
                                    <tr>
                                        <td>11</td>
                                        <td><a href="#">Como Gestor do meu negócio, sempre procuro descentralizar o máximo possível de atribuições para os demais funcionários, pois acredito possuir uma boa equipe de profissionais.</a></td>
                                        <td></td>
                                        <td class="text-center"><select class="form-control" maxlength="11" type="text" name="Campo11" id="Campo11">
                        <option value="0">Opções </option>
                        <option value="1">Discordo Totalmente</option>
                        <option value="2">Concordo Parcialmente</option>
                        <option value="3">Nem discordo/Nem concordo</option>
                        <option value="4">Concordo Parcialmente</option>
                        <option value="5">Concordo Totalmente</option>
                      </select></td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td><a href="#">Possuo uma pequena quantidade de funcionários de confiança que ajudam diariamente na Gestão do meu negócio, mesmo que de forma informal.</a></td>
                                        <td></td>
                                        <td class="text-center"><select class="form-control" maxlength="11" type="text" name="Campo12" id="Campo12">
                        <option value="0">Opções </option>
                        <option value="1">Discordo Totalmente</option>
                        <option value="2">Concordo Parcialmente</option>
                        <option value="3">Nem discordo/Nem concordo</option>
                        <option value="4">Concordo Parcialmente</option>
                        <option value="5">Concordo Totalmente</option>
                      </select></td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td><a href="#">Procuro incentivar o trabalho em equipe entre os funcionários, pois acredito que a colaboração é a chave para o sucesso do meu negócio.</a></td>
                                        <td></td>
                                        <td class="text-center"><select class="form-control" maxlength="11" type="text" name="Campo13" id="Campo13">
                        <option value="0">Opções </option>
                        <option value="1">Discordo Totalmente</option>
                        <option value="2">Concordo Parcialmente</option>
                        <option value="3">Nem discordo/Nem concordo</option>
                        <option value="4">Concordo Parcialmente</option>
                        <option value="5">Concordo Totalmente</option>
                      </select></td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td><a href="#">Geralmente me concentro em poucas áreas importantes que consigo fazer bem e me certifico que outras atividades importantes e bem definidas sejam realizadas por funcionários de confiança e com competências para desenvolver um bom trabalho.</a></td>
                                        <td></td>
                                        <td class="text-center"><select class="form-control" maxlength="11" type="text" name="Campo14" id="Campo14">
                        <option value="0">Opções </option>
                        <option value="1">Discordo Totalmente</option>
                        <option value="2">Concordo Parcialmente</option>
                        <option value="3">Nem discordo/Nem concordo</option>
                        <option value="4">Concordo Parcialmente</option>
                        <option value="5">Concordo Totalmente</option>
                      </select></td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td><a href="#">Deixo claro sempre que possível o que espero dos funcionários em termos de obrigações e responsabilidades, dando informações e orientações para que desempenhem um bom trabalho.</a></td>
                                        <td></td>
                                        <td class="text-center"><select class="form-control" maxlength="11" type="text" name="Campo15" id="Campo15">
                        <option value="0">Opções </option>
                        <option value="1">Discordo Totalmente</option>
                        <option value="2">Concordo Parcialmente</option>
                        <option value="3">Nem discordo/Nem concordo</option>
                        <option value="4">Concordo Parcialmente</option>
                        <option value="5">Concordo Totalmente</option>
                      </select></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                      
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Diagnóstico GENE</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-12">
                                <table class="table table-striped custab">
                                <thead>
                                   <tr>
                                        <th>ID</th>
                                        <th>Papel do Fundador da Empresa</th>
                                        <th></th>
                                        <th class="text-center">Resposta</th>
                                    </tr>
                                </thead>
                                    <tr>
                                        <td>16</td>
                                        <td><a href="#">Costumo me perguntar do que é que o meu negócio vai precisar futuramente em termos de Gestão.</a></td>
                                        <td></td>
                                        <td class="text-center"><select class="form-control" maxlength="11" type="text" name="Campo16" id="Campo16">
                        <option value="0">Opções </option>
                        <option value="1">Discordo Totalmente</option>
                        <option value="2">Concordo Parcialmente</option>
                        <option value="3">Nem discordo/Nem concordo</option>
                        <option value="4">Concordo Parcialmente</option>
                        <option value="5">Concordo Totalmente</option>
                      </select></td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td><a href="#">Dentro do que identifico como necessidades futuras de Gestão, me pergunto constantemente como posso contribuir para satisfazer essas necessidades.</a></td>
                                        <td></td>
                                        <td class="text-center"><select class="form-control" maxlength="11" type="text" name="Campo17" id="Campo17">
                        <option value="0">Opções </option>
                        <option value="1">Discordo Totalmente</option>
                        <option value="2">Concordo Parcialmente</option>
                        <option value="3">Nem discordo/Nem concordo</option>
                        <option value="4">Concordo Parcialmente</option>
                        <option value="5">Concordo Totalmente</option>
                      </select></td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td><a href="#">Acredito que seja importante fazer algo que eu realmente quero fazer dentro da empresa, algo que eu verdadeiramente goste de fazer e que constitua uma contribuição valiosa para o meu negócio.</a></td>
                                        <td></td>
                                        <td class="text-center"><select class="form-control" maxlength="11" type="text" name="Campo18" id="Campo18">
                        <option value="0">Opções </option>
                        <option value="1">Discordo Totalmente</option>
                        <option value="2">Concordo Parcialmente</option>
                        <option value="3">Nem discordo/Nem concordo</option>
                        <option value="4">Concordo Parcialmente</option>
                        <option value="5">Concordo Totalmente</option>
                      </select></td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td><a href="#">Sempre me pergunto qual é o meu lugar no meu negócio para me certificar de que estou dando contribuições valiosas e indispensáveis para o crescimento e o desenvolvimento do meu negócio.</a></td>
                                        <td></td>
                                        <td class="text-center"><select class="form-control" maxlength="11" type="text" name="Campo19" id="Campo19">
                        <option value="0">Opções </option>
                        <option value="1">Discordo Totalmente</option>
                        <option value="2">Concordo Parcialmente</option>
                        <option value="3">Nem discordo/Nem concordo</option>
                        <option value="4">Concordo Parcialmente</option>
                        <option value="5">Concordo Totalmente</option>
                      </select></td>
                                    </tr>
                                    <tr>
                                        <td>20</td>
                                        <td><a href="#">Frequentemente discuto com pessoas de confiança (amigos ou parentes que não fazem parte do negócio) decisões fundamentais tomadas por mim no meu negócio, pois acredito que opiniões externas podem contribuir para a Gestão do meu negócio.</a></td>
                                        <td></td>
                                        <td class="text-center"><select class="form-control" maxlength="11" type="text" name="Campo20" id="Campo20">
                        <option value="0">Opções </option>
                        <option value="1">Discordo Totalmente</option>
                        <option value="2">Concordo Parcialmente</option>
                        <option value="3">Nem discordo/Nem concordo</option>
                        <option value="4">Concordo Parcialmente</option>
                        <option value="5">Concordo Totalmente</option>
                      </select></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            


                          
            
             <div class="row">
                <div class="col-md-12">
                        <div class="panel panel-primary">
                          <div class="panel-heading">
                            <h3 class="panel-title">DIAGNÓSTICO GERAL</h3>
                          </div>
                          <div class="panel-body">
                                  <div class="row">
                                        <div class="col-md-12">
                                        <div class="panel panel-default">
                                          
                                          <div class="panel-body">
                                                  <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <!-- <label for="exampleInputEmail1" class="text-uppercase">Usuário:</label><input type="text" class="form-control" name="usuario" id="usuario" maxlength="50"> -->
                                                            </div>
                                                        </div>
                                                      
                                                        
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label" for="date">Description</label>
                                                                <input id="date" name="date" type="text" placeholder="Description" class="form-control input-md">
                                                            </div>
                                                        </div>
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                                 
                                                                <label class="control-label" for="date">Status</label>
                                                                <div class="radio">
                                                                 <label class="radio-inline">
                                                                     <input type="radio" id="status" name="statusradio" value="Female">Active
                                                                </label>
                                                        		<label class="radio-inline">
                                                        		    <input type="radio" id="status" name="statusradio" value="Male">Inactive
                                                                </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                     <!--Row 2 -->
                                     <div class="row">
                                        <div class="col-md-12">
                                                <div class="panel panel-default">
                                                    <div class="panel-body">
                                                        <div class="form-group">
                                                          <label class="col-md-5 control-label" for="button1id"></label>
                                                          <div class="col-md-6">
                                                            <button type="submit" id="button1id" name="button1id" class="btn btn-primary">Enviar</button>

                                                            <button id="button2id" name="button2id" class="btn btn-danger"">Resultado</button>
                                                          </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>


