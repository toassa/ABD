# *Software* de armazenamento de dados para a Associação dos Diabéticos de Bauru

## Descrição

  O sistema foi desenvolvido em colaboração com alunos e professores do curso de medicina da USP Bauru, em parceria com a Associação dos Diabéticos de Bauru (ADB). O *software* visa aprimorar o processo de gerenciamento de históricos e informações de pacientes atendidos pela instituição, oferecendo uma solução prática e eficiente para médicos e estudantes. O sistema permite que os participantes do projeto cadastrem funcionários e pacientes, além de consultar, editar e registrar dados referentes às consultas, triagem, retornos e relatórios dos pacientes. Isso não apenas simplifica o fluxo de trabalho, mas também permite uma análise abrangente das condições de saúde dos pacientes, facilitando um tratamento mais efetivo. Este projeto demonstra a aplicação da tecnologia para a melhoria da qualidade do atendimento médico, em especial para a população de diabéticos da região de Bauru. A disponibilização de dados de forma digital e acessível torna a assistência prestada pela Associação dos Diabéticos de Bauru mais eficiente, com um impacto positivo na saúde e bem-estar dos pacientes diabéticos atendidos pela instituição.
  
> [!NOTE]
> O projeto é uma forma de dinamizar a coleta e acesso de dados que já era realizada na associação.
> A antiga manipulação através de editores de planilhas e formulários on-line dificultava o gerenciamento e atendimento preciso dos pacientes. Assim, o sistema visa melhorar o antigo cenário, porém através da adaptação dos dados que já eram recebidos para uma plataforma on-line e banco de dados virtual.
> O código foi desenvolvido apenas de forma parcial por conta do curto período hábil para a conclusão do *software*. Nesse sentido, em anos posteriores busca-se que novos grupos do CTI possam dar continuidade às funcionalidades adicionais da plataforma.  


## Sistema

  O sistema conta com o gerenciamento de usuários, pacientes e diagnósticos dos pacientes e os acessos e funcionalidades dispoêm-se da seguinte forma:
  1. **Login** : é a página inicial do sistema, onde é possível acessar
   - Aviso de cookies e política de privacidade;
   - Item de opção para modo claro e escuro;
   - Login;
   - 'Esqueceu a senha';
  > [!NOTE]
  > As duas primeiras funcionalidades, ao fazer login, podem ser acessadas no menu localizado no canto superior direito, que ainda com=nta com opção de *logout*, acesso ao 'Help do Sistema' e o nome do usuário logado.
  --> Após o *login*, o usuário é direcionado à página com as funionalidades de 'Organização' e 'Pacientes', divididas entre:
     
  2. **Organização** : opção disponível apenas para administradores da plataforma, aborda as funcionalidades:
   - Cadastro de usuários;
   - Listagem de usuários;
   - Edição de usuários;
   - Desativação de usuários: o usuário que for desativado não terá mais acesso à plataforma (até que seja ativado novamente), mas seus dados ainda estarão salvos no banco de dados;
   - Exclusão de usuários: os dados do usuário serão excluídos integralmente do banco de dados;
   3. **Pacientes** : opção disponível para todos os usuários. Ao selecioná-la, é possível ter acesso a:
    - Opção de cadastro de novos pacientes
    - Listagem de pacientes: ao selecioná-la, será aberto o menu do paciente escolhido, lá, o usuário contará com as funcionalidades:
       - Configurações de paciente: que conta com:
         - Edição dos dados pessoais do paciente;
         - Desativação do paciente;
         - Medicamentos: onde é possível fazer o gerenciamento (cadastro, edição e exclusão) dos medicamentos utilizados pelo paciente
         - Primeiro atendimento: ao selecionar a funcionalidade, será possível visualizar três opções. Porém, apenas uma está desenvolvida:
         - Primeira Consulta: aqui, será aberta uma página com um menu lateral que contém todos os diagnósticos do paciente. Assim, ao selecionar um dos itens será possível cadastrar o diagnóstico do paciente referente àqueles dados, como: comprometimento neuropático, dados cardiovasculares, dieta, complicações...
      - Demais opções
> [!WARNING]
>  O paciente não pode ter seus dados excluídos do banco de dados, já que essas informações são utilizadas para pesquisas na Universidade de São Paulo (USP) de Bauru;
      
> [!IMPORTANT]
>  As outras funcionalidades do menu não estão desenvolvidas e ficarão a cargo dos desenvolvedores posteriores.
     

## Código 

  O código foi produzido majoritariamente através do *framework* PHP Laravel. Além disso, conta com as linguagem de programação JavaScript e as de marcação HTML e CSS, visando proporcionar uma UX (experiência do usuário) mais adequada através da plataforma *web*.
  Os arquivos de código estão comentados, visando que as equipes que forem dar continuidade ao projeto compreendam as funcionalidades do sistema da melhor forma possível.

### Programação
  
> [!IMPORTANT]
> Nem todos os arquivos estão comentados, já que muitos seguem os mesmos princípios para as funcionalidades. Assim, serão listados os arquivos parecidos e o que está comentado, visando localizar os novos desenvolvedores:

   - Os arquivos de Controllers localizados no endereço: '/ADB_prontuario/app/Http/Controllers/Admin/Consulta' seguem o mesmo padrão de funcionalidades, por isso o comentado é o 'NeuropaticoComprometimentoController'; 
   - O arvivo JavaScript localizado no endereço '\ADB_prontuario\public\js\excluirgustavo.js' é responsável por mostrar o pop-up na seção de excluir usuários. Ao excluir, o usuário é redirecionado à rota indicada para que a página atualize, no entanto, essa é um endereço do servidor no qual o projeto estava alocado. Siga as instruções do arquivo para rodá-lo corretamente.



[^1]: Os desenvolvedores responsáveis pela conclusão do sistema e de suas documentações foram os alunos do grupo de TCC Info Práx do Colégio Técnico Industrial "Prof. Isaac Portal Roldán" (UNESP) de Bauru. 
