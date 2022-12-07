<?php

namespace MinEduc\Banque;

//class CompteBancaireType
//{
//    const COURANT = 'Courant';
//    const PEL = 'PEL';
//    const LIVRET_A = 'Livret A';
//}

enum CompteBancaireType: string {
    case COURANT = 'Courant';
    case PEL = 'PEL';
    case LIVRET_A = 'Livret A';
}