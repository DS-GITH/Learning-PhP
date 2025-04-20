<?php
// Classe Filha que herda de Carro
class CarroEletrico extends Carro {
    public function exibirDetalhesEletrico(): void {
        $this->exibirModelo();  // Acessa o método público da classe pai
        $this->exibirCor();     // Acessa o método protegido da classe pai (funciona porque está na classe filha)
        // $this->exibirPreco(); // Não funciona, pois é privado
    }
}

// Criando um objeto da classe CarroEletrico
$carroEletrico = new CarroEletrico("Tesla", "Preto", 80000.00);
$carroEletrico->exibirDetalhesEletrico();  // Funciona, pois a classe filha pode acessar o método protegido
?>
