/* Russian locals for flatpickr */
var Flatpickr = Flatpickr || { l10ns: {} };
Flatpickr.l10ns.ru = {};

Flatpickr.l10ns.ru.weekdays = {
	shorthand: ['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс'],
	longhand: ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота','Воскресенье']
};

Flatpickr.l10ns.ru.months = {
	shorthand: ['Янв', 'Фев', 'Март', 'Апр', 'Май', 'Июнь', 'Июль', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек'],
	longhand: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь']
};
if (typeof module !== "undefined") {
	module.exports = Flatpickr.l10ns;
}
