class Main {
	public static void main(String[] args) {
		// Create two song objects
		Song song1 = new Song("Beyonce", 261, new Album("Halo", "Ryan Tedder"));
		Song song2 = new Song("Ali Kiba", 324, new Album("Mwana", "Ali Kiba"));

		Song[] songs = {song1, song2}; // create a songs array

		System.out.println(song1.artistIsComposer()); // false
		System.out.println(song2.artistIsComposer()); // true

		// Pass songs array, and get total song's length
		System.out.println(song1.totalLength(songs)); // 585
	}
}