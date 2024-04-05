import { DateTime, DurationUnits } from 'luxon'

export const useDateFormat = () => {
  const formatDateToMonth = (date: Date) => formatDate(date, { month: 'short', year: 'numeric' })
  const formatDateToYear = (date: Date) => formatDate(date, { year: 'numeric' })

  const formatDate = (date: Date, params: object = { month: 'long', year: 'numeric' }) => {
    const formattedDate = DateTime.fromJSDate(date).toLocaleString(params)
    return formattedDate === DateTime.now().toLocaleString(params) ? 'Present' : formattedDate
  }

  const formatDurationToMonth = (startDate: Date, endDate: Date) => formatDuration(startDate, endDate, ['years', 'months'])
  const formatDurationToYear = (startDate: Date, endDate: Date) => formatDuration(startDate, endDate, ['years'])

  const formatDuration = (startDate: Date, endDate: Date, params: DurationUnits = ['years', 'months']) => {
    const start = DateTime.fromJSDate(startDate)
    const end = DateTime.fromJSDate(endDate)
    return end.diff(start, params).toHuman({ maximumFractionDigits: 0 })
  }

  return { formatDateToMonth, formatDateToYear, formatDurationToMonth, formatDurationToYear }
}
