// ************************************************************************** //
//                                                                            //
//                                                        :::      ::::::::   //
//   oddeven.js                                         :+:      :+:    :+:   //
//                                                    +:+ +:+         +:+     //
//   By: pstringe <marvin@42.fr>                    +#+  +:+       +#+        //
//                                                +#+#+#+#+#+   +#+           //
//   Created: 2019/01/09 20:27:22 by pstringe          #+#    #+#             //
//   Updated: 2019/01/09 21:03:27 by pstringe         ###   ########.fr       //
//                                                                            //
// ************************************************************************** //

const readline = require('readline');

const rl = readline.createInterface({
	input: process.stdin,
	output: process.stdout
});

var oddEven = function () {
	rl.question('Enter a number: ', (answer) => {
		if (!isNaN(answer) && answer !== '')
			console.log(`The number ${answer} is: ${Number(answer) % 2 ? 'odd' : 'even'}`);
		else
			console.log(`'${answer}' is not a number`);
		oddEven();
	});
};

oddEven();
