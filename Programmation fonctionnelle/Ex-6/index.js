function killCount(counselers, jasonIntelligence) {
    return counselers
        .filter(([name, intelligence]) => intelligence < jasonIntelligence)
        .map(([name, intelligence]) => name);
}
// Exemple avec ces données
const counselers = [["Tchad", 2], ["Tommy", 9],['Megan',7],['Tyler',3] ];
const jason = 7;

console.log(" Les personnes qui ont une intelligence inférieure à Jason (7) -> ", killCount(counselers, jason));