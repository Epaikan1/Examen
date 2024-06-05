function squareDigits(number) {
    return parseInt(number.toString().split('').map(digit => digit * digit).join(''));
}

// Exemple d'utilisation avec donné dans le exerice

const exemple =9119
console.log(squareDigits(exemple));  // 811181
