// ************************************************************************** //
//                                                                            //
//                                                        :::      ::::::::   //
//   ssap.js                                            :+:      :+:    :+:   //
//                                                    +:+ +:+         +:+     //
//   By: pstringe <marvin@42.fr>                    +#+  +:+       +#+        //
//                                                +#+#+#+#+#+   +#+           //
//   Created: 2019/01/09 21:13:00 by pstringe          #+#    #+#             //
//   Updated: 2019/01/09 21:33:24 by pstringe         ###   ########.fr       //
//                                                                            //
// ************************************************************************** //

split = function (arg) {
	arg = arg.split(/(\s+)/);
	arg = arg.filter((value) => {
		return(!(/^\s+$/.test(value)));
	});
	return (arg);
};

var total;

process.argv.forEach((value, index) => {
	if (index > 1){
		if (total)
			total = total.concat(split(value));
		else
			total = split(value);
	}
});

total = total.sort((a, b) => {
	return a.toLowerCase().localeCompare(b.toLowerCase());
});

total.forEach((e) => {
	console.log(e);
});
