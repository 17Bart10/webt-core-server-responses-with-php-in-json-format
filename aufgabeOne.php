<?php

header('Content-Type: application/json; charset=utf-8');

class OST implements JsonSerializable
{
    private string $id;
    private string $name;
    private string $videoGameName;
    private string $releaseYear;
    private array $trackList = [];

    function __construct(string $id, string $name, string $videoGameName, string $releaseYear, array $trackList)
    {
        $this->id = $id;
        $this->name = $name;
        $this->videoGameName = $videoGameName;
        $this->releaseYear = $releaseYear;
        $this->trackList = $trackList;
    }

    public function jsonSerialize()
    {
        return array(
            'id' => $this->id,
            'name' => $this->name,
            'videoGameName' => $this->videoGameName,
            'releaseYear' => $this->releaseYear,
            'trackList' => $this->trackList
        );
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getVideoGameName(): string
    {
        return $this->videoGameName;
    }

    /**
     * @return string
     */
    public function getReleaseYear(): string
    {
        return $this->releaseYear;
    }

    /**
     * @return array
     */
    public function getTrackList(): array
    {
        return $this->trackList;
    }



}

class Song implements JsonSerializable
{
    private string $id;
    private string $name;
    private string $artist;
    private string $trackNumber;
    private string $duration;

    function __construct(string $id, string $name, string $artist, string $trackNumber, string $duration)
    {
        $this->id = $id;
        $this->name = $name;
        $this->artist = $artist;
        $this->trackNumber = $trackNumber;
        $this->duration = $duration;
    }

    public function jsonSerialize()
    {
        return array(
            'id' => $this->id,
            'name' => $this->name,
            'artist' => $this->artist,
            'trackNumber' => $this->trackNumber,
            'duration' => $this->duration
        );
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getArtist(): string
    {
        return $this->artist;
    }

    /**
     * @return string
     */
    public function getTrackNumber(): string
    {
        return $this->trackNumber;
    }

    /**
     * @return string
     */
    public function getDuration(): string
    {
        return $this->duration;
    }


}

