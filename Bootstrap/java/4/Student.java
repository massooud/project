class Student extends Person {
	private final String classStatus;

	public Student(String name, String address, String phone, String email, String classStatus) {
		super(name, address, phone, email);
		this.classStatus = classStatus;
	}

	@Override
	public String toString() {
		return "Class name is Student and Student's name is " + name;
	}
}