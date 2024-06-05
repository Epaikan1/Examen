function calculatePouboir(amount, rating) {
    const pourboirePercentages = {
        'terrible': 0,
        'poor': 5,
        'good': 10,
        'great': 15,
        'excellent': 20
    };

    rating = rating.toLowerCase();

    if (!pourboirePercentages.hasOwnProperty(rating)) {
        return "Rating not recognised";
    }

    const pourboirePercentage = pourboirePercentages[rating];
    const pourboireAmount = amount * pourboirePercentage / 100;

    return Math.ceil(pourboireAmount);
}

console.log(calculatePouboir(50, "excellent"));  // 20
console.log(calculatePouboir(20, "poor"));  // 5
console.log(calculatePouboir(100, "good"));  // 10
console.log(calculatePouboir(100, "erreur"));  // message erreur "Rating not recognised"
console.log(calculatePouboir(100, "great"));  // 15 console.log(calculatePouboir(100, "erreur"));  // message erreur "Rating not recognised"

