function check_fields(last_name, first_name, patronymic, birthdate, id_patient) {
	//если значения name1 name2 name3 name4 name5 не пусты
	if (document.getElementsByName(last_name).value != ""&&
				document.getElementsByName(first_name).value != "" &&
					document.getElementsByName(patronymic).value != "" &&
						document.getElementsByName(birthdate).value != "" &&
							document.getElementsByName(id_patient).value != "")
	{
		//то пишем, что "Поля не пусты"
		document.write("Данные нового пациента успешно внесены");
	}
else // иначе
	{
		//пишем это
		document.write("Одно или все поля пусты");
	}
}