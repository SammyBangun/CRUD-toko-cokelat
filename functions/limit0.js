function limitToZero(inputElement) {
    // Mendapatkan nilai dari elemen input
    let inputValue = parseFloat(inputElement.value);

    // Memeriksa apakah nilai kurang dari 0
    if (inputValue < 0) {
      // Jika ya, atur nilai menjadi 0
      inputElement.value = 0;
    }
  }