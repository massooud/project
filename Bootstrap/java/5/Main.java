class Main {
	public static void main(String[] args) {
		Person owner = new Person("Aiman");
		Paka paka = new Paka("Dizzo", owner);

		paka.setName("Bob");
		paka.haveBirthday();

		System.out.println(paka.toString());
	}
}