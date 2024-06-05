function findLongestWord(sentence) {
    const words = sentence.split(" ");
    let longestWord = "";
    words.forEach(word => {
        if (word.length >= longestWord.length) {
            longestWord = word;
        }
    });
    return longestWord;
}

// exemple utilisation de phase
    const  phase="On vous donne une chaîne de mots, renvoyez le mot le plus long. S?il y en a plusieurs, prendre le dernier"
console.log("Voici le mot le plus long dans la phase <<",findLongestWord(phase), ">>")