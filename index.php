<!DOCTYPE html>
<html lang="sv">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Testprojekt</title>
<script>
let data = [
	{
		name: "Kalle",
		age: 17
	},{
		name: "David",
		age: 34
	},{
		name: "Noor",
		age: 16,
		bd: "April"
	},{
		name: "Åke",
		age: 65
	}
];
data.sort(function(a, b) {
	if(b.name == "Noor") {
		return 1;
	} else {
		return a.name.localeCompare(b.name);
	}
});
console.log(data);
</script>
</head>
<body>

</body>
</html>