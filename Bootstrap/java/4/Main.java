class Main {
	public static void main(String[] args) {
		Student student = new Student("Aiman", "Chwaka", "08875557", "ima@g.com", "junior");
		Employee employee = new Employee("Kombo", "Tanga", "28342423", "ali@g.com", "ICT Office", 10000, "12 Jan 2021");

		System.out.println(student.toString());
		System.out.println(employee.toString());
	}
}