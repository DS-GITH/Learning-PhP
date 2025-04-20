<?php
// Definindo uma classe Carro
class Carro {
    // Propriedades com diferentes modificadores de acesso
    public string $modelo;
    protected string $cor;
    private float $preco;

    // Construtor para inicializar as propriedades
    public function __construct(string $modelo, string $cor, float $preco) {
        $this->modelo = $modelo;  // Acessível publicamente
        $this->cor = $cor;        // Acessível apenas na classe ou em subclasses
        $this->preco = $preco;    // Acessível apenas dentro da classe
    }

    // Método público para exibir o modelo do carro
    public function exibirModelo(): void {
        echo "Modelo do carro: " . $this->modelo . "<br>";
    }

    // Método protegido para exibir a cor (usado nas classes filhas)
    protected function exibirCor(): void {
        echo "Cor do carro: " . $this->cor . "<br>";
    }

    // Método privado para exibir o preço (somente dentro da classe Carro)
    private function exibirPreco(): void {
        echo "Preço do carro: " . $this->preco . "<br>";
    }

    // Método público para exibir todos os detalhes do carro
    public function exibirDetalhes(): void {
        $this->exibirModelo();  // Acessa o método público
        $this->exibirCor();     // Acessa o método protegido dentro da classe
        $this->exibirPreco();   // Acessa o método privado dentro da classe
    }
}

// Criando um objeto da classe Carro
$carro = new Carro("Fusca", "Azul", 25000.00);

// Acessando o método público
$carro->exibirModelo();  // Funcionando normalmente, pois é público

// Acessando o método protegido (não funciona fora da classe ou subclasses)
// $carro->exibirCor();  // Isso causaria um erro

// Acessando o método privado (não funciona fora da classe)
// $carro->exibirPreco();  // Isso causaria um erro

// Acessando o método público que chama métodos internos
$carro->exibirDetalhes();  // Aqui tudo funciona porque os métodos estão sendo chamados de dentro da própria classe
?>
