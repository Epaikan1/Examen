function convertToGrayscale(image) {
    return image.map(row =>
        row.map(([R, G, B]) => {
            const gray = Math.round((R + G + B) / 3);
            return [gray, gray, gray];
        })
    );
}

// Voici un exemple d'image 2x2: :
const colorImage = [
        [[123, 231, 12], [56, 43, 124]],
        [[78, 152, 76], [64, 132, 200]]
        ];

console.log(convertToGrayscale(colorImage))
