

# 📚 Projeto Laravel - Alunos

Este projeto foi desenvolvido como atividade prática para criar um sistema Laravel que utiliza **MySQL** como banco de dados, configurando migrations para gerar tabelas.

---

## 🚀 Tecnologias Utilizadas
- **PHP**
- **Laravel Framework**
- **MySQL**
- **Composer**
- **VS Code**


---

## Comando para criar o projeto e com o laravel

---
## comando usado no terminal para criação de migrations:
php artisan make:migration create_alunos_table --create=alunos
php artisan migrate


<p align="center"><img src="img 1 atv_migrations.png" width="700" alt="imagens"></p>
<p align="center"><img src="img 2 atv_migrations.png" width="700" alt="imagens"></p>

## Migration Criada
```
public function up(): void
{
    Schema::create('alunos', function (Blueprint $table) {
        $table->id();
        $table->string('nome', 100);
        $table->string('email', 150)->unique();
        $table->string('telefone', 15)->nullable();
        $table->date('data_nascimento');
        $table->string('curso', 100);
        $table->integer('ano_ingresso');
        $table->timestamps();
    });
}
```

<p align="center"><img src="img 1 atv_migrations.png" width="700" alt="imagens"></p>
<p align="center"><img src="img 2 atv_migrations.png" width="700" alt="imagens"></p>
<p align="center"><img src="img 3.png" width="700" alt="imagens"></p>
   

