# 📦 CRUD Completo em PHP e MySQL

Este repositório contém um **CRUD completo (Create, Read, Update, Delete)** desenvolvido em **PHP** com **MySQL**, como atividade prática para fixação de conceitos de **programação backend**, **banco de dados** e **integração frontend/backend**.

---

## 🎯 Objetivo do Projeto

O objetivo desta atividade foi:

- Aplicar na prática os conceitos de CRUD  
- Utilizar PHP para manipulação de dados  
- Integrar PHP com banco de dados MySQL  
- Trabalhar com formulários HTML  
- Realizar operações de cadastro, listagem, edição e exclusão  
- Melhorar a organização e o visual das páginas com CSS  

---

## 🛠️ Tecnologias Utilizadas

- **PHP**  
- **MySQL**  
- **HTML5**  
- **CSS3**  
- **XAMPP/WAMP** (ambiente local)  

---

## ⚙️ Funcionalidades do Sistema

✅ Cadastrar produtos  
✅ Listar produtos cadastrados  
✅ Editar produtos existentes   
✅ Relacionar produtos com categorias  
✅ Validação básica de campos  
✅ Interface estilizada com CSS  

---

## 🗄️ Estrutura do Banco de Dados

### Tabela: `categorias`
| Campo | Tipo |
|------|------|
| id_categoria | INT (PK) |
| nome | VARCHAR |

### Tabela: `produtos`
| Campo | Tipo |
|------|------|
| id_produto | INT (PK) |
| nome | VARCHAR |
| preco | DECIMAL |
| estoque | INT |
| id_categoria | INT (FK) |

---

## 📚 Aprendizados

Com este projeto foi possível aprender e reforçar:

- Conexão PHP com MySQL  
- Uso de formulários HTML  
- Comandos SQL (INSERT, SELECT, UPDATE, DELETE)  
- Organização de arquivos  
- Boas práticas iniciais de CRUD  
- Estilização básica com CSS  

---

## 👨‍💻 Autor

**Kauã Alves de Souza**  
---

## ✅ Observações

Este projeto tem fins **educacionais**, sendo parte de uma atividade prática para aprendizado de desenvolvimento web com **PHP e MySQL**.
