<?php

class Node {
    public $data;
    public $left;
    public $right;

    public function __construct($data) {
        $this->data = $data;
        $this->left = null;
        $this->right = null;
    }
}

class BinaryTree {
    private $root;

    public function __construct() {
        $this->root = null;
    }

    public function insert($data) {
        $this->root = $this->insertRecursive($this->root, $data);
    }

    private function insertRecursive($node, $data) {
        if ($node === null) {
            return new Node($data);
        }

        if ($data < $node->data) {
            $node->left = $this->insertRecursive($node->left, $data);
        } elseif ($data > $node->data) {
            $node->right = $this->insertRecursive($node->right, $data);
        }

        return $node;
    }

    public function search($data) {
        return $this->searchRecursive($this->root, $data);
    }

    private function searchRecursive($node, $data) {
        if ($node === null || $node->data === $data) {
            return $node;
        }

        if ($data < $node->data) {
            return $this->searchRecursive($node->left, $data);
        }

        return $this->searchRecursive($node->right, $data);
    }

    public function inOrderTraversal() {
        $result = [];
        $this->inOrderRecursive($this->root, $result);
        return $result;
    }

    private function inOrderRecursive($node, &$result) {
        if ($node !== null) {
            $this->inOrderRecursive($node->left, $result);
            $result[] = $node->data;
            $this->inOrderRecursive($node->right, $result);
        }
    }

    public function printTree() {
        $this->printTreeRecursive($this->root, 0);
    }

    private function printTreeRecursive($node, $depth) {
        if ($node === null) {
            return;
        }

        $this->printTreeRecursive($node->right, $depth + 1);

        // Imprime espaços para representar a profundidade
        echo str_repeat("    ", $depth);

        // Imprime o valor do nó
        echo $node->data . PHP_EOL;

        $this->printTreeRecursive($node->left, $depth + 1);
    }
}

// Exemplo de uso:
$tree = new BinaryTree();
$tree->insert(5);
$tree->insert(3);
$tree->insert(8);
$tree->insert(1);
$tree->insert(4);

echo "Busca 3: " . ($tree->search(3) ? "Encontrado" : "Não encontrado") . PHP_EOL;
echo "Busca 6: " . ($tree->search(6) ? "Encontrado" : "Não encontrado") . PHP_EOL;
$tree->printTree();
print "\n";
echo "Travessia em ordem: ";
print_r($tree->inOrderTraversal());