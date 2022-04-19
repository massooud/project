class Paka {
	private String name;
	private Person owner;
	private int age = 0;

	public Paka(String name, Person owner) {
		this.name = name;
		this.owner = owner;
	}

	public void setName(String name) {
		this.name = name + " the Feline";
	}

	public String getName() {
		return name;
	}

	public void setOwner(Person owner) {
		this.owner = owner;
	}

	public Person getOwner() {
		return owner;
	}

	public int getAge() {
		return age;
	}

	public void haveBirthday() {
		age++;
	}

	@Override
	public String toString() {
		return name + " is " + age + " and belongs to " + owner.getName();
	}
}