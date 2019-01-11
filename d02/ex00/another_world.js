// ************************************************************************** //
//                                                                            //
//                                                        :::      ::::::::   //
//   another_world.js                                   :+:      :+:    :+:   //
//                                                    +:+ +:+         +:+     //
//   By: pstringe <marvin@42.fr>                    +#+  +:+       +#+        //
//                                                +#+#+#+#+#+   +#+           //
//   Created: 2019/01/10 18:19:19 by pstringe          #+#    #+#             //
//   Updated: 2019/01/10 18:23:41 by pstringe         ###   ########.fr       //
//                                                                            //
// ************************************************************************** //

function split(arg) {
	arg = arg.split(/(\s+)/);
	arg = arg.filter((value) => {
		return(!(/^\s+$/.test(value)));
	});
	return (arg);
}

function another_world(arg) {
	arg = split(arg);
	arg = arg.join(' ');
	console.log(arg);
}

if (process.argv[2])
	another_world(process.argv[2]);
