function nbRepasOptions(developers) {
    const foodCount = {};

    developers.forEach(developer => {
        const meal = developer.Repas;
        if (foodCount.hasOwnProperty(meal)) {
            foodCount[meal]++;
        } else {
            foodCount[meal] = 1;
        }
    });

    return foodCount;
}

const list1 = [
    {FirstName: 'Noah', lastName: 'M.', pays: 'Suisse', continent: 'Europe', age: 19, langue: 'C', Repas: 'végétarien'},
    {FirstName: 'Anna', lastName: 'R.', pays: 'Liechtenstein', continent: 'Europe', age: 52, langue: 'JavaScript', Repas: 'standard'},
    {FirstName: 'Ramona', lastName: 'R.', pays: 'Paraguay', continent: 'Amériques', age: 29, langue: 'Ruby', Repas: 'vegan'},
    {FirstName: 'George', lastName: 'B.', pays: 'Angleterre', continent: 'Europe', age: 81, langue: 'C', Repas: 'végétarien'},
];

console.log(nbRepasOptions(list1)); // { 'végétarien': 2, standard: 1, vegan: 1 }