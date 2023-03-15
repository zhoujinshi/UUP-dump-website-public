<?php
/*
UUP dump translation file.

Translation information:
English language name: Portuguese (Brazil)
Localized language name: Português (Brasil)
Language code: pt-BR
Authors: Hélio de Souza / hdstec2018 (https://forums.mydigitallife.net/members/hdstec2018.1060506/) & Lucas Fell (https://github.com/fell-lucas)
https://sway.office.com/RVue6qySNJ2DzYrs
*/

//Language information
$s['code'] = 'pt-BR';
$s['timeZone'] = 'America/Sao_Paulo'; //Supported timezones: https://www.php.net/manual/en/timezones.php

//shared strings
$s['uupdump'] = 'UUP dump';
$s['uupdumpSub'] = '%s - UUP dump'; //Procurar compilações - UUP dump
$s['build'] = 'Compilação';
$s['arch'] = 'Arquitetura';
$s['ring'] = 'Canal';
$s['updateid'] = 'ID da atualização';
$s['update'] = 'Atualização';
$s['lang'] = 'Idioma';
$s['edition'] = 'Edição';
$s['seachForBuilds'] = 'Procurar compilações...';
$s['no'] = 'Não';
$s['yes'] = 'Sim';
$s['yesRecommended'] = 'Sim (recomendado)';
$s['next'] = 'Próximo';
$s['ok'] = 'OK';
$s['cancel'] = 'Cancelar';
$s['information'] = 'Informação';
$s['totalDlSize'] = 'Tamanho total do download';
$s['file'] = 'Arquivo';
$s['expires'] = 'Expira em';
$s['sha1'] = 'SHA-1';
$s['size'] = 'Tamanho';
$s['additionalEdition'] = 'Edição adicional';
$s['requiredEdition'] = 'Edição necessária';
$s['unknown'] = 'Desconhecido';

//global
$s['home'] = 'Início';
$s['downloads'] = 'Downloads';
$s['lightMode'] = 'Modo Claro';
$s['darkMode'] = 'Modo Escuro';
$s['sourceCode'] = 'Código Fonte';
$s['menu'] = 'Menu';
$s['websiteDesc'] = 'Faça o download de arquivos UUP dos servidores do Windows Update com facilidade. Este projeto não é afiliado à Microsoft Corporation.';
$s['notAffiliated'] = 'Este projeto não é afiliado à Microsoft Corporation. Windows é uma marca registrada da Microsoft Corporation.';
$s['copyright'] = '© %d %s e colaboradores.'; //© 2019 whatever127 and contributors.
$s['selectLanguage'] = 'Por favor, selecione o idioma';

//index.php
$s['slogan'] = 'Faça o download de arquivos UUP dos servidores do Windows Update com facilidade.';
$s['advOptions'] = 'Opções Avançadas';
$s['browseBuilds'] = 'Navegue pela lista de compilações';
$s['browseBuildsSub'] = 'Escolha uma compilação do banco de dados local para baixar.';
$s['fetchLatest'] = 'Buscar a última compilação';
$s['fetchLatestSub'] = 'Recuperar as informações de compilação mais recentes dos servidores do Windows Update.';
$s['newlyAdded'] = 'Novas compilações adicionadas';
$s['dateAdded'] = 'Adicionado em';

//known.php
$s['browseKnown'] = 'Procurar compilações disponíveis';
$s['chooseBuild'] = 'Escolha a compilação';
$s['weFoundBuilds'] = 'Encontramos <b>%d</b> compilações para sua consulta.'; //Encontramos <b>692</b> compilações para sua consulta.

//latest.php
$s['latestFetchLatest'] = 'Buscar a compilação mais recente';
$s['latestTestingOnly'] = 'Apenas para fins de teste';
$s['latestTestingOnlyWarn'] = '<b>Esta página é fornecida apenas para fins de teste.</b> Compilações recuperadas por esta página que não foram processadas pelo servidor back-end serão fornecidas usando pacotes de fallback, que podem fornecer resultados incompletos. Se deseja baixar uma compilação disponível, por favor use a página de Compilações Disponíveis.';
$s['latestDoYouWantKnown'] = 'Gostaria de continuar navegando na lista de compilações disponíveis?';
$s['chooseOptions'] = 'Escolha as opções';
$s['buildOfPretendedClient'] = 'Número de compilação do cliente simulado do Windows Update';
$s['editionOfPretendedClient'] = 'Edição do sistema simulado';
$s['skipAheadLabel'] = 'Skip ahead flight';
$s['skipAheadOption'] = 'Usar skip ahead flighting (apenas Insider Fast)';
$s['fetchUpdates'] = 'Buscar atualizações';
$s['fetchUpdatesInfo'] = 'Clique no botão <i>Buscar atualizações</i> para enviar sua solicitação para os servidores do Windows Update.';

//fetchupd.php
$s['responseFromServer'] = 'Resposta do servidor';
$s['foundUpdates'] = 'Atualizações encontradas: %d '; //Encontrada 1 atualização
$s['foundTheseUpdates'] = 'As seguintes atualizações foram encontradas. Clique no nome da atualização desejada para continuar.';
$s['buildNumber'] = 'Número da compilação: %s'; //Build number: 18890.1000

//selectlang.php
$s['selectLangFor'] = 'Selecione o idioma para %s'; //Selecione o idioma para o Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['chooseLang'] = 'Escolha o idioma';
$s['chooseLangDesc'] = 'Escolha o idioma desejado';
$s['allLangs'] = 'Todos os Idiomas';
$s['selLangFiles'] = 'Arquivos';
$s['allFiles'] = 'Todos Arquivos';
$s['wubOnly'] = 'Apenas WindowsUpdateBox';
$s['updateOnly'] = 'Somente atualização';
$s['selectLangInfoText1'] = 'Clique no botão <i>Próximo</i> para selecionar a edição que deseja baixar.';
$s['selectLangInfoText2'] = 'WindowsUpdateBox.exe e Atualizações Cumulativas podem ser encontradas no idioma<i>Todos os Idiomas</i>.';
$s['allLangsWarn'] = 'A opção <i>Todos os Idiomas</i> não suporta a seleção de edições.';
$s['clickNextToOpenFindFiles'] = 'Clique no botão <i>Próximo</i> para abrir a página que permite encontrar os arquivos.';
$s['noLangsAvailable'] = 'Não há idiomas disponíveis para esta compilação.';
$s['browseFiles'] = 'Procurar arquivos';
$s['browseFilesDesc'] = 'Navegar rapidamente pelos arquivos da compilação selecionada';
$s['searchFiles'] = 'Procurar arquivos';
$s['toSearchForCUUseQuery'] = 'Para procurar atualizações cumulativas use <i>% s</i> na pesquisa.'; //Para procurar atualizações cumulativas use <i>Windows 10 KB</i> na pesquisa.

//selectedition.php
$s['selectEditionFor'] = 'Selecione a edição para %s'; //Selecione a edição para o Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64, English (United States)
$s['chooseEdition'] = 'Escolha a edição';
$s['chooseEditionDesc'] = 'Escolha a sua edição desejada';
$s['allEditions'] = 'Todas as edições';
$s['selectEditionInfoText'] = 'Clique no botão <i>Próximo</i> para abrir a página com o resumo da sua seleção.';
$s['additionalEditionsInfo'] = 'Se você precisar de uma edição adicional que pode ser encontrado na tabela à direita, selecione a edição requerida indicada e clique em <i>Próximo</i>. Na página de resumo, você poderá selecionar as edições adicionais desejadas na opção de download apropriado. ';

//download.php
$s['summary'] = 'Resumo';
$s['summaryDesc'] = 'Revise sua seleção e escolha o método de download';
$s['summaryFor'] = 'Resumo para %s'; //Resumo para o Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64, English (United States), Windows 10 Pro
$s['summaryOfSelection'] = 'Resumo da sua seleção';
$s['browseList'] = 'Procurar na lista de arquivos';
$s['browseListDesc'] = 'Abre a página com a lista de arquivos do conjunto UUP para download manual.';
$s['aria2Opt1'] = 'Download usando aria2';
$s['aria2Opt1Desc'] = 'Baixe o conjunto UUP selecionado usando aria2.';
$s['aria2Opt2'] = 'Download usando aria2 e converter';
$s['aria2Opt2Desc'] = 'Baixe o conjunto UUP selecionado usando aria2 e converta-o em ISO.';
$s['aria2Opt3'] = 'Download usando aria2, converter e criar edições adicionais';
$s['aria2Opt3Desc'] = 'Baixe o conjunto UUP selecionado usando aria2, converta, crie edições adicionais e finalmente crie uma imagem ISO.';
$s['jsRequiredToConf'] = 'O JavaScript é necessário para configurar e usar esta opção.';
$s['selAdditionalEditions'] = 'Selecione edições adicionais';
$s['noAdditionalEditions'] = 'Nenhuma edição adicional está disponível para esta seleção.';
$s['learnMore'] = 'Saiba mais';
$s['learnMoreAdditionalEditions1'] = 'Esta opção permite a criação automática de edições adicionais selecionadas.';
$s['learnMoreAdditionalEditions2'] = 'A lista de edições adicionais é determinada pelas edições base selecionadas. Abaixo, você pode conferir a lista de edições base que são necessárias para criar as edições adicionais desejadas:';
$s['learnMoreUpdates1'] = 'As atualizações serão integradas à imagem convertida somente quando o script de conversão for executado nos seguintes sistemas:';
$s['learnMoreUpdates2'] = 'Se você executar o script de conversão em qualquer outro sistema, as atualizações não serão integradas à imagem resultante.';
$s['systemWithAdk'] = '%s com o Windows 10 ADK instalado'; //Windows 7 com o Windows 10 ADK instalado
$s['additionalUpdates'] = 'Atualizações adicionais';
$s['additionalUpdatesDesc'] = 'Este conjunto UUP contém atualizações adicionais que serão integradas durante o processo de conversão, aumentando significativamente o tempo de criação.';
$s['browseUpdatesList'] = 'Navegar pela lista de atualizações';
$s['selectDownloadOptions'] = 'Selecione suas opções de download';
$s['selectDownloadOptionsSub'] = 'Configure como você deseja baixar sua seleção';
$s['downloadMethod'] = 'Método de download';
$s['conversionOptions'] = 'Opções de conversão';
$s['convOpt1'] = 'Criar ISO com install.esd em vez de install.wim';
$s['convOpt2'] = 'Integrar atualizações quando disponível (Conversor do Windows apenas)';
$s['convOpt3'] = 'Executar a limpeza após a integração de atualizações  (Conversor do Windows apenas)';
$s['convOpt4'] = 'Integrar o .Net Framework 3.5 (Conversor do Windows apenas)';
$s['startDownload'] = 'Criar pacote de download';

//get.php
$s['listOfFilesFor'] = 'Lista de arquivos para %s'; //Lista de arquivos para o Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['totalSizeOfFiles'] = 'Tamanho total dos arquivos: %s'; //Tamanho total dos arquivos: 2.86 GiB
$s['fileRenamingScript'] = 'Script de renomeação de arquivos';
$s['fileRenamingScriptDesc1'] = 'O script abaixo pode ser usado para renomear rapidamente os arquivos baixados.';
$s['fileRenamingScriptDesc2'] = 'Copie o conteúdo do formulário abaixo em um novo arquivo com a extensão <code>cmd</code>, coloque-o na pasta com os arquivos baixados e execute.';
$s['sha1File'] = 'Arquivo SHA-1';
$s['sha1FileDesc'] = 'Você pode usar esse arquivo para verificar rapidamente se os arquivos foram baixados corretamente.';
$s['aria2NoticeTitle'] = 'Aviso sobre o download usando a opção aria2';
$s['aria2NoticeText1'] = 'O download usando as opções aria2 cria um arquivo que precisa ser baixado. O arquivo baixado contém todos os arquivos necessários para realizar a tarefa selecionada.';
$s['aria2NoticeText2'] = 'Para iniciar o processo de download, use um script para sua plataforma:';
$s['aria2NoticeText3'] = 'Aria2 é um projeto de código aberto. Você pode encontrá-lo aqui: %s.'; //Aria2 é um projeto de código aberto. Você pode encontrá-lo aqui: https://aria2.github.io/.
$s['aria2NoticeText4'] = 'O script de conversão UUP (versão Windows) foi criado por %s.'; //O script de conversão UUP (versão Windows) foi criado por abbodi1406.
$s['aria2NoticeText5'] = 'O script de conversão UUP (versão Linux, versão macOS) é de código aberto. Você pode encontrá-lo aqui: %s.'; //O script de conversão UUP (versão Linux, versão macOS) é de código aberto. Você pode encontrá-lo aqui: https://github.com/uup-dump/converter.

//findfiles.php
$s['findFilesIn'] = 'Encontrar arquivos em %s'; //Localizar arquivos no Windows 10 Insider Preview 18890.1000 (rs_prerelease) amd64
$s['fileRenamingScriptDescFindFiles'] = 'Se deseja renomear rapidamente os arquivos baixados desta página, você pode gerar um script de renomeação, que fará isso automaticamente.';
$s['fileRenamingScriptGenW'] = 'Gerar script de renomeação (Windows)';
$s['fileRenamingScriptGenL'] = 'Gerar script de renomeação (Linux, macOS)';
$s['searchForFiles'] = 'Procurar arquivos...';
$s['weFoundFiles'] = 'Encontramos <b>%d</b> arquivos para sua consulta.';//Encontramos <b>692</b> arquivos para sua consulta.

//Error pages
$s['error'] = 'Erro';
$s['requestNotSuccessful'] = 'Erro na solicitação';
$s['anErrorHasOccurred'] = 'Ocorreu um erro ao tentar processar sua solicitação.';
$s['generatedPackNotAvailable'] = 'Pacote gerado não disponível';
$s['generatedPackNotAvailableDesc'] = 'A atualização que você está tentando baixar não tem um pacote gerado que forneça informações completas sobre idiomas, edições e arquivos disponíveis. O pacote de fallback será usado e pode não fornecer as informações corretas. Se o download falhar por causa disso, aguarde o pacote gerado automaticamente ficar disponível.';
$s['arm64Warning'] = 'Você selecionou uma compilação ARM64 que é <b>compatível apenas com dispositivos baseados em ARM64</b> e não funcionará com PCs normais baseados em Intel ou AMD. Para PCs <b>64-bits</b> use as compilações <b>amd64</b>. Para PCs <b>32-bits</b> use as compilações <b>x86</b>. Se você tem certeza absoluta de que o dispositivo de destino é baseado em ARM64, ignore esta mensagem.';

//Error messages
$s['error_ERROR'] = 'Erro genérico.';
$s['error_UNSUPPORTED_API'] = 'A versão da API instalada não é compatível com esta versão do UUP dump.';
$s['error_NO_FILEINFO_DIR'] = 'O diretório <i>fileinfo</i> não existe.';
$s['error_NO_BUILDS_IN_FILEINFO'] = 'A base de dados <i>fileinfo</i> não contém nenhuma compilação.';
$s['error_SEARCH_NO_RESULTS'] = 'Nenhum item encontrado para a consulta realizada.';
$s['error_UNKNOWN_ARCH'] = 'Arquitetura do processador desconhecido.';
$s['error_UNKNOWN_RING'] = 'Canal desconhecido.';
$s['error_UNKNOWN_FLIGHT'] = 'Flight desconhecido.';
$s['error_UNKNOWN_COMBINATION'] = 'A combinação entre o Flight e o Canal não estão corretos. Skip ahead é suportado apenas no canal Insider Fast.';
$s['error_ILLEGAL_BUILD'] = 'O número de compilação especificado é menor que %d ou maior que %d.'; //O número de compilação especificado é menor que 9841 ou maior que 2147483646.
$s['error_ILLEGAL_MINOR'] = 'A menor compilação está incorreta.';
$s['error_NO_UPDATE_FOUND'] = 'O servidor não retornou atualizações.';
$s['error_XML_PARSE_ERROR'] = 'A análise do XML de resposta falhou. Pode haver um problema com os servidores da Microsoft. Tente mais tarde.';
$s['error_EMPTY_FILELIST'] = 'O servidor retornou uma lista de arquivos vazia.';
$s['error_NO_FILES'] = 'Não há arquivos disponíveis para sua seleção.';
$s['error_NOT_FOUND'] = 'A seleção especificada não pode ser encontrada.';
$s['error_MISSING_FILES'] = 'O conjunto UUP selecionado possui arquivos ausentes.';
$s['error_NO_METADATA_ESD'] = 'Não há arquivos ESD de metadados disponíveis para sua seleção.';
$s['error_UNSUPPORTED_LANG'] = 'O idioma especificado não é suportado.';
$s['error_UNSPECIFIED_LANG'] = 'O idioma não foi especificado.';
$s['error_UNSUPPORTED_EDITION'] = 'A edição especificada não é suportada.';
$s['error_UNSUPPORTED_COMBINATION'] = 'A combinação entre o idioma e a edição não está correta.';
$s['error_NOT_CUMULATIVE_UPDATE'] = 'A atualização selecionada não contém uma Atualização Cumulativa.';
$s['error_UPDATE_INFORMATION_NOT_EXISTS'] = 'As informações sobre a atualização especificada não existe no banco de dados.';
$s['error_KEY_NOT_EXISTS'] = 'A chave especificada não existe nas informações de atualização.';
$s['error_UNSPECIFIED_UPDATE'] = 'O ID de atualização não foi especificado.';
$s['error_INCORRECT_ID'] = 'O ID de atualização especificado está incorreto. Certifique-se de que o ID de atualização especificado está correto.';
$s['error_RATE_LIMITED'] = 'Por favor, tente novamente em alguns segundos.';
$s['error_UNSPECIFIED_VE'] = 'Você não selecionou nenhuma edição adicional. Se não deseja criar edições adicionais, use a opção <i>Download usando aria2 e converter</i>.';
$s['errorNoMessage'] = 'Mensagem de erro indisponível.';

//Languages
$s['lang_ar-sa'] = 'Arabic (Saudi Arabia)';
$s['lang_bg-bg'] = 'Bulgarian';
$s['lang_cs-cz'] = 'Czech';
$s['lang_da-dk'] = 'Danish';
$s['lang_de-de'] = 'German';
$s['lang_el-gr'] = 'Greek';
$s['lang_en-gb'] = 'English (United Kingdom)';
$s['lang_en-us'] = 'English (United States)';
$s['lang_es-es'] = 'Spanish (Spain)';
$s['lang_es-mx'] = 'Spanish (Mexico)';
$s['lang_et-ee'] = 'Estonian';
$s['lang_fi-fi'] = 'Finnish';
$s['lang_fr-ca'] = 'French (Canada)';
$s['lang_fr-fr'] = 'French (France)';
$s['lang_he-il'] = 'Hebrew';
$s['lang_hr-hr'] = 'Croatian';
$s['lang_hu-hu'] = 'Hungarian';
$s['lang_it-it'] = 'Italian';
$s['lang_ja-jp'] = 'Japanese';
$s['lang_ko-kr'] = 'Korean';
$s['lang_lt-lt'] = 'Lithuanian';
$s['lang_lv-lv'] = 'Latvian';
$s['lang_nb-no'] = 'Norwegian (Bokmal)';
$s['lang_nl-nl'] = 'Dutch';
$s['lang_pl-pl'] = 'Polish';
$s['lang_pt-br'] = 'Portuguese (Brazil)';
$s['lang_pt-pt'] = 'Portuguese (Portugal)';
$s['lang_qps-ploc'] = 'Pseudo';
$s['lang_ro-ro'] = 'Romanian';
$s['lang_ru-ru'] = 'Russian';
$s['lang_sk-sk'] = 'Slovak';
$s['lang_sl-si'] = 'Slovenian';
$s['lang_sr-latn-rs'] = 'Serbian (Latin)';
$s['lang_sv-se'] = 'Swedish';
$s['lang_th-th'] = 'Thai';
$s['lang_tr-tr'] = 'Turkish';
$s['lang_uk-ua'] = 'Ukrainian';
$s['lang_zh-cn'] = 'Chinese (Simplified)';
$s['lang_zh-hk'] = 'Chinese (Hong Kong)';
$s['lang_zh-tw'] = 'Chinese (Traditional)';
