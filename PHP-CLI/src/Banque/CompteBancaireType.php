<?php

namespace PhpCli\Banque;

enum CompteBancaireType: string {
    case COURANT = 'Courant';
    case PEL = 'PEL';
    case LIVRET_A = 'Livret A';
}