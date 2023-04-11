<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alter-aluno</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <?php
        include_once('header-alterar.html')
    ?>

    <main>
    <form action="aluno.php" method="get" >
    <section id="alt-nome">
    <label for="inome">Nome:</label>
    <input type="text" name="nome" value="<?php echo $_GET['nome']?>" id="iname">
    </section>
    <section id="alt-nomesocial">
    <label for="inomes">Nome:</label>
    <input type="text" name="nomes" value="<?php echo $_GET['nomes']?>" id="inomes">
    </section>
    <section id="alt-senha">
    <label for="isenha">Senha:</label>
    <input type="text" name="senha" value="<?php echo $_GET['senha']?>" id="isenha">
    </section>
    <section id="alt-cpf">
    <label for="icpf">CPF:</label>
    <input type="text" name="cpf" value="<?php echo $_GET['cpf']?>" id="icpf">
    </section>
    <section id="alt-ende">
    <label for="iende">Endereço:</label>
    <input type="text" name="ende" value="<?php echo $_GET['ende']?>" id="iende">
    </section>
    <section id="alt-matricula">
    <label for="imatri">Matricula:</label>
    <input type="text" name="matri" value="<?php echo $_GET['matri']?>" id="imatri">
    </section>
    <section id="alt-turma">
    <label for="iturma">Turma:</label>
    <input type="text" name="turma" value="<?php echo $_GET['turma']?>" id="iturma">
    </section>
    <section id="alt-estado">
    <label for="esta">Estado:</label>
    <select name="estado" id="esta" required>
                    <option value="<?php echo strtoupper($_GET['estado'])?>"> <?php echo strtoupper($_GET['estado'])?></option>
                    <option value="ac">ACRE</option>
                    <option value="al">ALAGOAS</option>
                    <option value="ap">AMAPA</option>
                    <option value="am">AMAZONAS</option>
                    <option value="ba">BAHIA</option>
                    <option value="ce">CEARA</option>
                    <option value="df">DISTRITO FEDERAL</option>
                    <option value="es">ESPIRITO SANTO</option>
                    <option value="go">GOIAS</option>
                    <option value="ma">MARANHAO</option>
                    <option value="mt">MATO GROSSO</option>
                    <option value="ms">MATO GROSSO DO SUL</option>
                    <option value="mg">MINAS GERAIS</option>
                    <option value="pa">PARA</option>
                    <option value="pb">PARAIBA</option>
                    <option value="pr">PARANA</option>
                    <option value="pe">PERNAMBUCO</option>
                    <option value="pi">PIAUI</option>
                    <option value="rj">RIO DE JANEIRO</option>
                    <option value="rn">RIO GRANDE DO NORTE</option>
                    <option value="rs">RIO GRANDE DO SUL</option>
                    <option value="ro">RONDANIA</option>
                    <option value="rr">RORAIMA</option>
                    <option value="sc">SANTA CATARINA</option>
                    <option value="sp">SAO PAULO</option>
                    <option value="se">SERGIPE</option>
                    <option value="to">TOCANTINS</option>
    </select>
    </section>
    <section id="enviar">
    <input type="submit" value="Alterar">
    </section>
    </form>
    </main>
    <?php include_once('footer.html')?>
</body>
</html>