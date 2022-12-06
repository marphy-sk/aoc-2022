import { part1, part2 } from './solution'

describe('day 6', () => {
  it('part1', () => {
    expect(part1('bvwbjplbgvbhsrlpgdmjqwftvncz')).toBe(5);
    expect(part1('nppdvjthqldpwncqszvftbrmjlhg')).toBe(6);
    expect(part1('nznrnfrfntjfmvfwmzdfjlvtqnbhcprsg')).toBe(10);
    expect(part1('zcfzfwzzqfrljwzlrfnpqdbhtmscgvjw')).toBe(11);
  });

  it('part1', () => {
    expect(part1('mjqjpqmgbljsphdztnvjfqwrcgsmlb')).toBe(19);
    expect(part1('bvwbjplbgvbhsrlpgdmjqwftvncz')).toBe(23);
    expect(part1('nppdvjthqldpwncqszvftbrmjlhg')).toBe(23);
    expect(part1('nznrnfrfntjfmvfwmzdfjlvtqnbhcprsg')).toBe(29);
    expect(part1('zcfzfwzzqfrljwzlrfnpqdbhtmscgvjw')).toBe(26);
  });
})
