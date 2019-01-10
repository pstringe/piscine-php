// ************************************************************************** //
//                                                                            //
//                                                        :::      ::::::::   //
//   ssap.js                                            :+:      :+:    :+:   //
//                                                    +:+ +:+         +:+     //
//   By: pstringe <marvin@42.fr>                    +#+  +:+       +#+        //
//                                                +#+#+#+#+#+   +#+           //
//   Created: 2019/01/09 21:13:00 by pstringe          #+#    #+#             //
//   Updated: 2019/01/09 22:56:55 by pstringe         ###   ########.fr       //
//                                                                            //
// ************************************************************************** //


var split = function (arg) {
	arg = arg.split(/(\s+)/);
	arg = arg.filter((value) => {
		return (!(/^\s+$/.test(value)));
	});
	return (arg);
};

function alpha(arr)
{
	a = arr.filter((value) => {
		return (/^[a-zA-Z]+$/.test(value));
;
	});
	return (a);
}

function lex(a, b) {
	return a.toLowerCase().localeCompare(b.toLowerCase());
}


function ssap(arr, cmp)
{
	let total;
	
	arr.forEach((value, index) => {
		if (index > 1) {
			if (total)
				total = total.concat(split(value));
			else
				total = split(value);
		}
	});
	return(total.sort(cmp));
}

arr = ssap(process.argv);
console.log(alpha(arr));
arr.forEach((e) => {
	console.log(e);
});
