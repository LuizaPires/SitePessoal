<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php include_once 'sendmail.php'; ?>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="../styles/slide.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Glass+Antiqua&family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="descrição" content="Baú da Lu - Tesouros da Web">
    <meta name="autora" content="Luiza Pires">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Baú da Lu</title>
</head>

<body>
    <div id="areaTopo" class="areaTopo">
        <div class="cabecalho">
            <!--------------------------- COMEÇO DO BasicSLIDE -------------------------->
            <div id="basicSlider" class="basicSlider">
                <div class="MS-content">
                    <div class="item"><img src="./images/frontend.png" alt="" /></div>
                    <div class="item"><img src="./images/html.png" alt="" /></div>
                    <div class="item"><img src="./images/css.png" alt="" /></div>
                    <div class="item"><img src="./images/js.png" alt="" /></div>
                    <div class="item"><img src="./images/webdeveloper.png" alt="" /></div>
                    <div class="item"><img src="./images/npm.png" alt="" /></div>
                    <div class="item"><img src="./images/node.png" alt="" /></div>
                    <div class="item"><img src="./images/jquery.png" alt="" /></div>
                    <div class="item"><img src="./images/designer.png" alt="" /></div>
                    <div class="item"><img src="./images/photoshop.png" alt="" /></div>
                    <div class="item"><img src="./images/Xd.png" alt="" /></div>
                    <div class="item"><img src="./images/coreldraw.png" alt="" /></div>
                </div>
            </div>
            <script src="./js/multislider.min.js"></script>
            <script>
                $('#basicSlider').multislider({
                    continuous: true,
                    duration: 2000
                });
            </script>
            <!--------------------------- FIM DO BasicSLIDE -------------------------->
        </div>
        <div class="principal">
            <h1 class="logo">Baú da Lu</h1>
            <p class="links">
                <a href="./Pages/quemSouEu.html" class="quemSouEu">Quem sou Eu</a> |
                <a href="#areaDesigns" class="designs">Design</a> |
                <a href="#areaDesenvolvimento" class="desenvolvimento">Desenvolvimento</a> |
                <a href="https://www.baudalu.net.br/blog" class="blog" target="_blank">Blog</a>
            </p>
        </div>
    </div>
    <div class="molduraNorman">
        <div class="donNorman">
            <p class="donNormanTexto">"Design is really an act of communication, which means having a deep
                understanding of the person with
                whom the designer is communicating."</p>
            <p class="donNormanNome"> Don Norman</p>
        </div>
    </div>

    <div id="areaDesigns" class="areaDesigns">
        <div class="designsEsquerda">
            <h2>DESIGN</h2>
            <ul class="designsLista">
                <a href="https://baudalu.net.br/blog/category/ilustracoes/" target="_blank">
                    <li>Ilustrações</li>
                </a>
                <a href="https://baudalu.net.br/blog/category/patterns/" target="_blank">
                    <li>Patterns</li>
                </a>
                <a href="https://baudalu.net.br/blog/category/artes-vetoriais/" target="_blank">
                    <li>Artes Vetoriais</li>
                </a>
                <a href="https://baudalu.net.br/blog/category/edicao-de-imagens/" target="_blank">
                    <li>Edição de Imagens</li>
                </a>
                <a href="https://baudalu.net.br/blog/category/fontes/" target="_blank">
                    <li>Fontes</li>
                </a>
                <a href="https://baudalu.net.br/blog/category/manualidades/"target="_blank">
                    <li>Manualidades</li>
                </a>
            </ul>
        </div>
        <div class="designsDireita"></div>
    </div>
    <div class="molduraNielsen">
        <div class="Nielsen">
            <p class="nielsenTexto">"O Design Gráfico é a primeira e a última parte da interface observada
                pelo usuário."</p>
            <p class="nielsenNome"> Jakob Nielsen</p>
        </div>
    </div>

    <div id="areaDesenvolvimento" class="areaDesenvolvimento">
        <h2>DESENVOLVIMENTO</h2>
        <div class="desenvolvimento-btn">
            <div class="github-btn">
                <a href="https://github.com/LuizaPires" target="_blank">G</a>
            </div>
            <div class="codepen-btn">
                <a href="https://codepen.io/luiza-pires" target="_blank">C</a>
            </div>
        </div>
    </div>

    <div class="contato">
        <div class="Jobs">
            <p class="jobsTexto">"As pessoas não sabem o que querem, até mostrarmos a elas."</p>
            <p class="jobsNome">Steve Jobs</p>
        </div>

        <h2 class="msg">Envie-me uma mensagem</h2>

        <div class="entreEmContato">
            <div class="contatoLatEsquerda">
                <div class="contatos">
                    <span class="whatsapp">Entre em contato - WhatsApp: </span>
                    <a id="whatsapp" href="https://bit.ly/LuizaPiresZAP" title="WhatsApp" target="_blank">Z</a>
                </div>
            </div>

            <div class="infGerais"></div>

            <div class="containerForm">
                <h1>Entre em contato</h1>
                <br>
                <form class="form-horizontal" action="index.php#formulario" method="post" role="form"
                    data-toggle="validator">
                    <div class="form-group">
                        <label class="control-label col-sm-3">Nome<span class="obrigatorio">*</span>:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nome" id="nome" value=""
                                placeholder="seu nome" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Email<span class="obrigatorio">*</span>:</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" name="email" id="email" value=""
                                placeholder="seu email" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Telefone<span class="obrigatorio">*</span>:</label>
                        <div class="col-sm-9">
                            <input type="tel" class="form-control" name="telefone" id="telefone" placeholder="(00) 00000-0000" required>
                        <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Assunto<span class="obrigatorio">*</span>:</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="assunto" required>
                                <option value="" selected="selected" disabled="disabled"> -- Escolha uma opção --
                                </option>
                                <option value="contato">Elogios</option>
                                <option value="duvidas">Dúvidas</option>
                                <option value="orcamento">Orçamento</option>
                                <option value="informacoes">Informações</option>
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Mensagem<span class="obrigatorio">*</span>:</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" id="exampleTextarea" rows="6" id="mensagem" name="mensagem"
                                placeholder="sua mensagem" required></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 text-right">
                            <input class="btn btn-primary" id="submit" name="btnSend" type="submit" value="ENVIAR">
                            <a name="formulario"></a>
                            <div class="mensagem-alerta">
                                <?php echo $msg ?>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <script
                src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
        </div>
    </div>

    <div id="irTopo">
        <a href="#areaTopo">T</a>
    </div>






    <footer>
        <p class="creditos"> Créditos: Imagens de Freepik.com</p>
        <p class="copyright"> Desenvolvido por Luiza Pires | &copy; Todos os direitos reservados</p>
    </footer>
</body>

</html>