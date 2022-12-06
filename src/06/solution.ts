import { readFileSync } from "fs"

const data = readFileSync('data.txt', "utf8")

const isUniqueCharset = (input: string) => {
  return [...input].filter((char, index, self) => self.indexOf(char) === index).length === [...input].length
}

export const part1 = (data: string) => {
  for (let i = 0; i < data.length; i++) {
    if (isUniqueCharset(data.slice(i, i + 4)))  {
      return i + 4
    }
  }
}

export const part2 = (data: string) => {
  for (let i = 0; i < data.length; i++) {
    if (isUniqueCharset(data.slice(i, i + 14)))  {
      return i + 14
    }
  }
}
