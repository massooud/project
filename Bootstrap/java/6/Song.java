class Song {
	private String title;
	private String artist;
	private int length;
	private String composer;

	public Song(String artist, int length, Album album) {
		this.title = album.getTitle();
		this.artist = artist;
		this.length = length;
		this.composer = album.getComposer();
	}

	public boolean artistIsComposer() {
		return artist.equals(composer);
	}

	public static int totalLength(Song[] songs) {
		int totalLength = 0;

		for (int i = 0; i < songs.length; i++) {
			totalLength += songs[i].length;
		}

		return totalLength;
	}
}