$("document").ready(function(){
	$("#search-form").submit(function(e){
		return false;
	});

	$("#search").click(function(){
		$('.r50').css('display','block');
		$('.l50').css("background-color", "#ffffff9e");
		var data = ($("#search-form").serialize() );
		$.ajax({
			type: "GET",
			url: "/post_api",
			data: $("#search-form").serialize(),
			complete: function(response) {
				var resp = (JSON.parse(response.responseText));
				var len = resp['journeys'].length;
				var journey = (resp['journeys'][0].legs);
				//console.log(journey[0].instruction.steps[4].description);

				var start_date = resp['journeys'][0].startDateTime;
				var res_start_date = start_date.split("T");
				var res_start_date_ = res_start_date[1].substring(0,5);

				var end_date = resp['journeys'][0].arrivalDateTime;
				var res_end_date = end_date.split("T");
				var res_end_date_ = res_end_date[1].substring(0,5);
				$("#table_result").empty();
				$('.ywt').html($('#to').val());
				$('.start_time').html("<b>Start time </b>"+res_start_date_);
				$('.end_time').html("<b>End time </b>"+res_end_date_);
				$('.duration').html("<b>Duration </b>"+resp['journeys'][0].duration+" mins");
				var fullDate = new Date()
				var twoDigitMonth = ((fullDate.getMonth().length+1) === 1)? (fullDate.getMonth()+1) : '0' + (fullDate.getMonth()+1);
				var currentDate = fullDate.getDate() + "/" + twoDigitMonth + "/" + fullDate.getFullYear();
				$('.date').html(currentDate);

				for(var i=0; i<len; i++){
					var line = journey[i].instruction.steps.length;
					//console.log(line);
					if (line > 0) {
						//console.log(journey[i].instruction.steps);
						for(var b=0; b<line; b++){
							var desc_line = journey[i].instruction.steps[b].description;
							var dire = journey[i].instruction.steps[b].turnDirection;
							if(dire == 'SHARP_LEFT'){dire = 'Sharp Left'}
							if(dire == 'STRAIGHT'){dire = 'Straight'}
							if(dire == 'RIGHT'){dire = 'Turn right'}
							if(dire == 'LEFT'){dire = 'Turn left'}
							if(dire == 'SLIGHT_LEFT'){dire = 'Slight Left'}
							var tr_stra = "<tr><td>" + dire+" "+desc_line + "</td></tr>";
							$("#table_result").append(tr_stra);
							//console.log(desc_line);
						}

					}else{
						var tr_str = "<tr><td> Get the " + journey[i].instruction.summary + "</td></tr>";
						$("#table_result").append(tr_str);
					}
				}
				var tr_str = "<tr><td>You have now arrived</td></tr>";
						$("#table_result").append(tr_str);
			}
		});
	});
});